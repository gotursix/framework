<?php
namespace App\Models;
use Core\Model;
use App\Models\Users;
use App\Models\UserSessions;
use Core\Cookie;
use Core\Session;
use Core\Validators\MinValidator;
use Core\Validators\MaxValidator;
use Core\Validators\RequiredValidator;
use Core\Validators\EmailValidator;
use Core\Validators\MatchesValidator;
use Core\Validators\UniqueValidator;

class Restore extends Model
{
   private $_isLoggedIn, $_sessionName, $_cookieName, $post_vars, $_confirm;
   public static $currentLoggedInUser = null;
   public $id, $username , $email , $password , $fname , $lname , $acl , $token = null ,  $deleted=0;

   public function __construct()
    {
      $table = 'users';
      parent::__construct($table);
      $this->_softDelete = false ;
    }


   public function validator()
   {
     $this->runValidation(new RequiredValidator($this , ['field'=>'email' , 'msg'=>'Email is required.']));
     $this->runValidation(new EmailValidator($this , ['field'=>'email' , 'msg'=> 'You must provide a valid email adress.']));
     $this->runValidation(new MaxValidator($this,['field'=>'email','rule'=>150,'msg'=>'Email must be less than 150 characters.']));
   }


 
   public function findByUsername($username)
   {
     return $this->findFirst(['conditions'=>'username = ?','bind'=>[$username]]);
   }

    public function findByEmail($email)
   {
     return $this->findFirst(['conditions'=>'email = ?','bind'=>[$email]]);
   }

    public function findByToken($token)
   {
     return $this->findFirst(['conditions'=>'token = ?','bind'=>[$token]]);
   }
}
