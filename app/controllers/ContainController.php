<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session;
use Core\Router;
use Core\H;
use App\Models\Upload;
use App\Models\Album;
use App\Models\Contain;
use App\Models\Users;

class ContainController extends Controller
{

  public function __construct($controller,$action)
  {
    parent::__construct($controller,$action);
    $this->view->setLayout('default');
    $this->load_model('Contain');
    $this->load_model('Upload');
    $this->load_model('Album');
  }

  public function editAction($id)
  {
    $album = $this->AlbumModel->findByIdAndUserId((int)$id, Users::currentUser()->id);
    $contain = new Contain();
      if(!$album)
    {
      Router::redirect('album');
    }
    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      $contain->assign($this->request->get());

      if($contain->save())
      Router::redirect('album');
    }
    $upload = $this->UploadModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , 1 );
    $this->view->upload = $upload;
    $this->view->displayErrors = $contain->getErrorMessages() ;
    $this->view->album = $album;
    $this->view->postAction = PROOT . 'contain' . DS . 'edit' . DS . $contain->id;
    $this->view->render('contain/edit');
    }


  public function detailsAction($id)
  {
    $album = $this->AlbumModel->findByIdAndUserId((int)$id, Users::currentUser()->id);

    if(!$album)
    {
      Router::redirect('album');
    }

     $this->view->contain = $contain ;
       $this->view->album = $album;
     $this->view->render('contain/details');
  }




}
