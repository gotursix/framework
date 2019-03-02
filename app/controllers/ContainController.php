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
    $contain = $this->ContainModel->findByAlbumIdAndUserId( $album->id, Users::currentUser()->id);
    if(!$album)
    {
      Router::redirect('album');
    }

    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      Router::redirect('album');
    }
    $upload = $this->UploadModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , $album->format );
    $this->view->upload = $upload;
    $this->view->displayErrors = $album->getErrorMessages() ;
    $this->view->album = $album;
    $this->view->contain = $contain;
    $this->view->postAction = PROOT . 'contain' . DS . 'edit' . DS . $album->id;
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


  public function addAction($id,$album)
  {
        $contain = new Contain();
        $upload = $this->UploadModel->findByIdAndUserId((int)$id,Users::currentUser()->id);
        $album = $this->AlbumModel->findByIdAndUserId((int)$album, Users::currentUser()->id);
        if($upload)
        {
          $contain->user_id = Users::currentUser()->id;
          $contain->album_id = $album->id;
          $contain->name = $upload->name;
          $contain->save();
        }
        Router::redirect("contain/edit/$album->id");
  }

  public function deleteAction($id,$album)
  {
        $upload = $this->ContainModel->findByIdAndUserId((int)$id,Users::currentUser()->id);
        $album = $this->AlbumModel->findByIdAndUserId((int)$album, Users::currentUser()->id);
        if($upload)
        {
          $upload->delete();
        }
        Router::redirect("contain/edit/$album->id");
  }




}
