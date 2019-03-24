<?php
namespace App\Controllers;
use Core\Controller;
use Core\Router;
use Core\H;
use Core\FH;
use App\Models\Users;
use App\Models\Restore;
use App\Models\Login;

class RestoreController extends Controller
{
   public function __construct($controller,$action)
   {
     parent::__construct($controller,$action);
     $this->load_model('Users');
     $this->load_model('Restore');
     $this->view->setLayout('default');
   }

  public function recoverAction()
   {
     $user = new Restore();
     if($this->request->isPost())
     {
       $this->request->csrfCheck();
       $user->assign($this->request->get());
       $user->validator();
       if($user->validationPassed())
       {
         if($this->RestoreModel->findByEmail($user->email))
         {
           $user = $this->RestoreModel->findByEmail($user->email);
           $str = "W3dzqXfYkCOmL8IEeMqb6u4d8xtLPvYSgvKZNQMrHf7mz9688vl8SlEpGjm0";
           $str = str_shuffle($str);
          if($user->token == null)
          {
            $token = $this->RestoreModel->findByToken( $str );
            while($token != false) 
             {
               $str = str_shuffle($str);
               $token = $this->RestoreModel->findByToken( $str );
              }
           $str = substr($str, 0, 30); 
           $user->token = $str;
           $user->save();
           $user->addErrorMessage('username','An email with the link has been sent. If you do not receive it, please check the spam.');
           FH::sendmail($user->email , $user->username , $str);
          }
          else 
          {
           $user->addErrorMessage('username','An email has been already sent. If you have not received it, please check the spam.');
          }
         }
         else 
         {
            $user->addErrorMessage('username','This email does not belong to any account.');
         }
       }
     } 
     $this->view->displayErrors = $user->getErrorMessages();
     $this->view->user = $user;
     $this->view->render('register/recover');
   }

}




