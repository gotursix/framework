<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use Core\Session;
use App\Models\Users;

class HomeController extends Controller
{

public function __construct($controller,$action)
  {
      parent::__construct($controller,$action);
  }


public function indexAction()
  {
   $this->view->render('home/index');
  }

  public function testAjaxAction(){
       $resp = ['success'=>true,'data'=>['id'=>23,'name'=>'Te-ai spariet ??','favorite_food'=>'bread']];
       $this->jsonResponse($resp);
     }
   }
