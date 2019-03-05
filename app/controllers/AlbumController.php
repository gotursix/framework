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
    $this->load_model('Contain');
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
        $album = $this->AlbumModel->findByNameAndUserId($album->name, Users::currentUser()->id);
        Router::redirect("contain/edit/$album->id");
      }
    }
    $this->view->album = $album ;
    $this->view->displayErrors = $album->getErrorMessages();
    $this->view->postAction = PROOT . 'album' . DS . 'add';
    $this->view->render('album/add');
  }


  public function createAction($format)
  {
    $album = new Album();
    $maxim = 4;
    $minim =1;
    if(!(($format <= $maxim) && ($minim <= $format)))
      Router::redirect("album/index");

    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      $album->assign($this->request->get());
      $album->user_id = Users::currentUSer()->id;
      $album->format = $format;
      if($album->save())
      {
        $album = $this->AlbumModel->findByNameAndUserId($album->name, Users::currentUser()->id);
        Router::redirect("contain/edit/$album->id");
      }
    }
    $this->view->album = $album ;
    $this->view->displayErrors = $album->getErrorMessages();
    $this->view->postAction = PROOT . 'album' . DS . 'create' . DS . $format;
    $this->view->render('album/create');
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

    public function deleteAction($id)
    {
          $album = $this->AlbumModel->findByIdAndUserId((int)$id,Users::currentUser()->id);
          $contain = $this->ContainModel->findByAlbumIdAndUserId( $id,(int)Users::currentUser()->id);
          if($album)
          {
            foreach ($contain as $contain)
             $contain->delete();
            $album->delete();
            Session::addMsg('success','Album has been deleted');
          }
          Router::redirect('album');
    }


}
