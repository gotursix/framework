<?php
use Core\Session;
use Core\Cookie;
use Core\Router;
use Core\H;
use App\Models\Users;

(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') ? define('DS', '/') : define('DS', DIRECTORY_SEPARATOR);
define('ROOT',dirname(__FILE__));

//load configuration
require_once(ROOT . DS . 'config' . DS . 'config.php');



//autoload classes
 function autoload($className)
 {
   $classAry = explode('\\',$className);
   $class = array_pop($classAry);
   $subPath = strtolower(implode(DS,$classAry));
   $path = ROOT . DS . $subPath . DS . $class . '.php';
   if(file_exists($path))
   {
     require_once($path);
   }
 }


spl_autoload_register('autoload');
session_start();

$url = isset($_SERVER['PATH_INFO']) ? explode('/',ltrim($_SERVER['PATH_INFO'],'/')) :[] ;

if(!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME))
{
  Users::loginUserFromCookie();
}

 //create a folder for the user , which is the same as the user id , if it doesn't already exist
 if(Session::exists(CURRENT_USER_SESSION_NAME))
 {
   $dir = Users::currentUser()->id;
   $filepath="";
   $filepath .= ROOT . DS . 'files' . DS . $dir;
   if (!file_exists($filepath))
   {
       mkdir($filepath , 0777 , true);
   }
 }

//Route the request
Router::route($url);
