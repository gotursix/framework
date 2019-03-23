<?php
namespace App\Controllers;
use Core\Controller;
use Core\Router;
use Core\H;
use Core\FH;
use App\Models\Users;
use App\Models\Resetore;
use App\Models\Login;

class ResetController extends Controller
{
   public function __construct($controller,$action)
   {
     parent::__construct($controller,$action);
     $this->load_model('Users');
     $this->load_model('Restore');
     $this->view->setLayout('default');
   }

  public function resetAction($token)
  {
    $user = $this->RestoreModel->findByToken($token);
    if(!($user))
    {
      Router::redirect('');
    }

    if($this->request->isPost())
    {
      $this->request->csrfCheck();
      $user->assign($this->request->get());
      if($user->save()) 
      {
        $user->password = password_hash($user->password , PASSWORD_DEFAULT);
        $user->token= null;
        $user->save();

       if(Users::currentUser())
        Router::redirect("register/logout");
        else  Router::redirect("register/login");
      }
    }
    
    $this->view->displayErrors = $user->getErrorMessages() ;
    $this->view->user = $user;
    $this->view->render('register/reset');
    }



}




