<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session;
use Core\Router;
use Core\H;
use App\Models\Contacts;
use App\Models\Users;
use App\Models\Upload;
use \PATH_INFO;

class UploadController extends Controller
{

  public function __construct($controller,$action)
  {
    parent::__construct($controller,$action);
    $this->view->setLayout('default');
      $this->load_model('Upload');
  }

  public function modifyAction()
  {
      $upload = $this->UploadModel->findAllByUserId((int)Users::currentUser()->id , ['order' => 'format , name']);
      $this->view->upload = $upload;
      $this->view->render('upload/index');
  }


  public function imagesAction()
  {
      $upload = $this->UploadModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , 1 );
      $this->view->upload = $upload;
      $this->view->render('upload/images');
  }


    public function videoAction()
  {
      $upload = $this->UploadModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , 2 );
      $this->view->upload = $upload;
      $this->view->render('upload/video');
  }


    public function audioAction()
  {
      $upload = $this->UploadModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , 3 );
      $this->view->upload = $upload;
      $this->view->render('upload/audio');
  }

      public function documentsAction()
  {
      $upload = $this->UploadModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , 4 );
      $this->view->upload = $upload;
      $this->view->render('upload/documents');
  }


  public function addAction()
  {
    $upload = new Upload();

    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      $upload->assign($this->request->get());
      $upload->user_id = Users::currentUser()->id;
      $upload->name .= "." . pathinfo($_FILES['file']['name'] , PATHINFO_EXTENSION);
      $value = pathinfo($_FILES['file']['name'] , PATHINFO_EXTENSION);
      $upload->format = Upload::setFormat($value);
      if($_FILES['file']['size'] > 50*MB)
        $upload->addErrorMessage('name','The file maximum size is 50MB.');
      $dir = Users::currentUser()->id;
    if($upload->save())
    {
        if(move_uploaded_file($_FILES["file"]["tmp_name"],'files' . DS . $dir . DS . $upload->name ))
      {
        if($upload->format == 1)
          Router::redirect('upload/images');

        if($upload->format == 2)
          Router::redirect('upload/video');

        if($upload->format == 3)
          Router::redirect('upload/audio');

        if($upload->format == 4)
          Router::redirect('upload/documents');
      }
      else
      {
          $upload->addErrorMessage('file','There were a problem uploading it.');
      }
    }
   }
    $this->view->uploas = $upload ;
    $this->view->displayErrors = $upload->getErrorMessages();
    $this->view->postAction = PROOT . 'upload' . DS . 'add';
    $this->view->render('upload/add');
  }



  public function deleteAction($id)
  {
        $upload = $this->UploadModel->findByIdAndUserId((int)$id,Users::currentUser()->id);
        if($upload)
        {
          $upload->delete();
          Session::addMsg('success','The file has been deleted. You can restore it if you wish in the Settings -> Recycle bin.');
        }
        Router::redirect('upload/modify');
  }


}
