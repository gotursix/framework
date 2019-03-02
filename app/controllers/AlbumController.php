<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session;
use Core\Router;
use Core\H;
use App\Models\Upload;
use App\Models\Album;
use App\Models\Users;

class AlbumController extends Controller
{

  public function __construct($controller,$action)
  {
    parent::__construct($controller,$action);
    $this->view->setLayout('default');
    $this->load_model('Album');
  }


  public function indexAction()
  {
      $album = $this->AlbumModel->findAllByUserId(Users::currentUser()->id , ['order'=>'format ,  name']);
      $this->view->album = $album;
      $this->view->render('album/index');
  }


  public function addAction()
  {
    $album = new Album();

    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      $album->assign($this->request->get());
      $album->user_id = Users::currentUSer()->id;
      if($album->save())
      {
        Router::redirect('album');
      }
    }
    $this->view->album = $album ;
    $this->view->displayErrors = $album->getErrorMessages();
    $this->view->postAction = PROOT . 'album' . DS . 'add';
    $this->view->render('album/add');
  }


  public function editAction($id)
  {
    $album=$this->AlbumModel->findByIdAndUserId((int)$id, Users::currentUser()->id);
    if(!$album)
    {
      Router::redirect('album');
    }

    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      $album->assign($this->request->get());
      if($album->save())   Router::redirect('album');
    }
    $this->view->displayErrors = $album->getErrorMessages() ;
    $this->view->album = $album;
    $this->view->postAction = PROOT . 'album' . DS . 'edit' . DS . $album->id;
    $this->view->render('album/edit');
    }


  public function detailsAction($id)
  {
   $album = $this->AlbumModel->findByIdAndUserId((int)$id, Users::currentUser()->id);
    if(!$album)
     {
       Router::redirect('album');
     }
     $this->view->album = $album ;
     $this->view->render('album/details');
  }


    public function deleteAction($id)
    {
          $album = $this->AlbumModel->findByIdAndUserId((int)$id,Users::currentUser()->id);
          if($album)
          {
            $album->delete();
            Session::addMsg('success','Album has been deleted');
          }
          Router::redirect('album');
    }


}
