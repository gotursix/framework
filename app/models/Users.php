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

class Users extends Model
{
   private $_isLoggedIn, $_sessionName, $_cookieName, $post_vars, $_confirm;
   public static $currentLoggedInUser = null;
   public $id, $username , $email , $password , $fname , $lname , $acl , $token = null ,  $deleted=0;

   public function __construct($user='')
   {
     $table = 'users';
     parent::__construct($table);
     $this->_sessionName= CURRENT_USER_SESSION_NAME;
     $this->_cookieName= REMEMBER_ME_COOKIE_NAME;
     $this->_softDelete = true;
     if($user!='')
     {
       if(is_int($user))
       {
         $u=$this->_db->findFirst('users',['conditions'=>'id = ?', 'bind'=>[$user]],'App\Models\Users');
       }
       else
       {
         $u =$this->_db->findFirst('users',['conditions'=>'username = ?','bind'=>[$user]],'App\Models\Users');
       }
       if($u)
       {
         foreach ($u as $key => $val)
         {
           $this->$key = $val;
         }
       }
     }
   }


   public function validator()
   {
     $this->runValidation(new RequiredValidator($this , ['field'=>'fname' , 'msg'=>'First name is required.']));
     $this->runValidation(new RequiredValidator($this , ['field'=>'lname' , 'msg'=>'Last name is required.']));
     $this->runValidation(new RequiredValidator($this , ['field'=>'email' , 'msg'=>'Email is required.']));
     $this->runValidation(new EmailValidator($this , ['field'=>'email' , 'msg'=> 'You must provide a valid email adress.']));
     $this->runValidation(new MinValidator($this,['field'=>'username','rule'=>6,'msg'=>'Username must be at least 6 characters.']));
     $this->runValidation(new MaxValidator($this,['field'=>'username','rule'=>150,'msg'=>'Username must be less than 150 characters.']));
     $this->runValidation(new MaxValidator($this,['field'=>'fname','rule'=>15,'msg'=>'First name must be less than 15 characters.']));
     $this->runValidation(new MaxValidator($this,['field'=>'lname','rule'=>15,'msg'=>'Last name be less than 15 characters.']));
     $this->runValidation(new UniqueValidator($this, ['field'=>'username', 'msg'=>'This username already exists, please choose another one.']));
     $this->runValidation(new UniqueValidator($this, ['field'=>'email', 'msg'=>'This email already belongs to an account, please choose another one.']));
     $this->runValidation(new RequiredValidator($this , ['field'=>'password' , 'msg'=>'Password is required.']));
     $this->runValidation(new MinValidator($this,['field'=>'password','rule'=>6,'msg'=>'Password must be at least 6 characters.']));
     if($this->isNew())
     {
       $this->runValidation(new MatchesValidator($this , ['field'=>'password' , 'rule' => $this->_confirm , 'msg'=>'Your passwords do not match.']));
     }
   }


   public function beforeSave()
   {
     if($this->isNew())
     {
       $this->password = password_hash($this->password , PASSWORD_DEFAULT);
     }
   }


   public function findByUsername($username)
   {
     return $this->findFirst(['conditions'=>'username = ?','bind'=>[$username]]);
   }

    public function findByEmail($email)
   {
     return $this->findFirst(['conditions'=>'email = ?','bind'=>[$email]]);
   }


   public static function currentUser()
   {
     if(!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME))
     {
         $u = new Users((int)Session::get(CURRENT_USER_SESSION_NAME));
         Self::$currentLoggedInUser = $u;
     }
     return self::$currentLoggedInUser;
   }


   public function login($rememberMe=false)
   {
    Session::set($this->_sessionName,$this->id);
    if($rememberMe)
    {
      $hash = md5(uniqid()+ rand(0,100));
      $user_agent = Session::uagent_no_version();
      Cookie::set($this->_cookieName,$hash,REMEMBER_COOKIE_EXPIRY);
     $fields = [
            'user_id'=>$this->id,
           'session' =>$hash,
           'user_agent'=>$user_agent
         ];
     $this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?",[$this->id,$user_agent]);
      $this->_db->insert('user_sessions',$fields);
    }
   }


   public static function loginUserFromCookie()
   {
     $userSession = UserSessions::getFromCookie();
     if($userSession && $userSession->user_id != '')
     {
       $user = new self((int)$userSession->user_id);
       if($user)
       {
         $user->login();
       }
       return $user;
     }
     return;
   }


   public function logout()
   {
     $user_agent = Session::uagent_no_version();
     $this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?",[$this->id, $user_agent]);
     Session::delete(CURRENT_USER_SESSION_NAME);
     if(Cookie::exists(REMEMBER_ME_COOKIE_NAME))
     {
       Cookie::delete(REMEMBER_ME_COOKIE_NAME);
     }
     self::$currentLoggedInUser = null;
     return true;
   }

     public function acls()
     {
       if(empty($this->acl))  return [];

         return json_decode($this->acl,true);
     }

     public function setConfirm($value)
     {
       $this->_confirm = $value;
     }

     public function getConfirm()
     {
       return $this->_confirm;
     }

}
