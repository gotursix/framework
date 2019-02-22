<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session;
use Core\Router;
use Core\H;
use App\Models\Contacts;
use App\Models\Users;
use App\Models\Upload;

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
      if($upload->save())
      {
        Router::redirect('upload');
      }
    }

    $this->view->uploas = $upload ;
    $this->view->displayErrors = $upload->getErrorMessages();
    $this->view->postAction = PROOT . 'upload' . DS . 'add';
    $this->view->render('upload/add');
  }







}