<?php
namespace App\Controllers;
use Core\Controller;
use Core\Router;
use Core\H;
use App\Models\Users;
use App\Models\Login;

class RegisterController extends Controller
{
   public function __construct($controller,$action)
   {
     parent::__construct($controller,$action);
     $this->load_model('Users');
     $this->view->setLayout('default');
   }


   public function loginAction()
   {
     $loginModel = new Login();
     if($this->request->isPost())
     {
       $this->request->csrfCheck();
       $loginModel->assign($this->request->get());
       $loginModel->validator();
       if($loginModel->validationPassed())
       {
         $user = $this->UsersModel->findByUsername($_POST['username']);
         if($user && password_verify($this->request->get('password'), $user->password))
         {
           $remember = $loginModel->getRememberMeChecked();
           $user->login($remember);
           Router::redirect('');
         }  else {
           $loginModel->addErrorMessage('username','There is an error with your username or password.');
            }
       }
     }
     $this->view->login = $loginModel;
     $this->view->displayErrors = $loginModel->getErrorMessages();
     $this->view->render('register/login');
   }


   public function logoutAction()
   {
     if(Users::currentUser())
     {
       Users::currentUser()->logout();
     }
     Router::redirect('register/login');
   }


   public function registerAction()
   {
      $newUser = new Users();
     if($this->request->isPost())
     {
       $this->request->csrfCheck();
       $newUser->assign($this->request->get());
       $newUser->setConfirm($this->request->get('confirm'));
       if($newUser -> save())
       {
         Router::redirect('register/login');
       }
   }
   $this->view->newUser = $newUser;
   $this->view->displayErrors = $newUser->getErrorMessages();
   $this->view->render('register/register');
 }


 public function modifyAction()
 {
     $name = $this->UsersModel->currentUser();
     if(!$name)
     {
       Router::redirect('');
     }

     if($this->request->isPost())
     {
       $this->request->csrfCheck();
       $name->assign($this->request->get());
       if($name->save())
        Router::redirect('');
     }

     $this->view->displayErrors = $name->getErrorMessages();
     $this->view->name = $name;
     $this->view->postAction = PROOT . 'register' . DS . 'modify';
     $this->view->render('register/modify');
 }


  public function recoverAction()
   {
     $user = new Users;
     if($this->request->isPost())
     {
      $this->request->csrfCheck();
      $user->assign($this->request->get());
      $pass = true;
      $required = true;
      if($user->email)
       {
       $pass = filter_var($user->email , FILTER_VALIDATE_EMAIL);
       }
       else 
       {
        $user->addErrorMessage('email','The email is required.');
        $required = false;
       }
    
      if($required == true)
      {
        if($pass == true)
         {
           if($this->UsersModel->findByEmail($user->email))
           {
                $user->addErrorMessage('email','Yo , nigga , good email.');
            }
            else 
           {
            $user->addErrorMessage('email','This email does not exist.');
           }
        }
        else 
         {
          $user->addErrorMessage('email','Please enter a valid email adress.');
        }
      } 
       else
      {
        $user->addErrorMessage('email','The email is required.');
      }
    }
     $this->view->displayErrors = $user->getErrorMessages();
     $this->view->user = $user;
     $this->view->render('register/recover');
   }



}
