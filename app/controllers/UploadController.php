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

  public function indexAction()
  {
      $upload = $this->UploadModel->findAllByUserId(Users::currentUser()->id , ['order'=>'name']);
      $this->view->upload = $upload;
      $this->view->render('upload/index');
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
      $upload->format = pathinfo($_FILES['file']['name'] , PATHINFO_EXTENSION);

      if($upload->save())
      {
        $dir = Users::currentUser()->id;
        if(move_uploaded_file($_FILES["file"]["tmp_name"],'files' . DS . $dir . DS . $upload->name ))
        {
          Router::redirect('upload');
      }
      else
      {
        $upload->addErrorMessage('file','Sorry, there was a problem uploading your file.');
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
          Session::addMsg('success','The image has been deleted');
        }
        Router::redirect('upload');
  }


}
