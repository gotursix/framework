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
  }

  public function editAction($id)
  {
    $contain = $this->ContainModel->findByIdAndUserId((int)$id, Users::currentUser()->id);
    if(!$contain)
    {
      Router::redirect('album');
    }

    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      $contain->assign($this->request->get());
      if($contain->save())   Router::redirect('album');
    }
    $this->view->displayErrors = $contain->getErrorMessages() ;
    $this->view->contain = $contain;
    $this->view->postAction = PROOT . 'contain' . DS . 'edit' . DS . $contain->id;
    $this->view->render('contain/edit');
    }


  public function detailsAction($id)
  {
   $contain = $this->ContainModel->findByIdAndUserId((int)$id, Users::currentUser()->id);
    if(!$contain)
     {
       Router::redirect('album');
     }
     $this->view->contain = $contain ;
     $this->view->render('contain/details');
  }




}
