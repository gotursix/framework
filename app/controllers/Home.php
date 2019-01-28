<?php

class Home extends Controller
{

public function __construct($controller,$action)
  {
      parent::__construct($controller,$action);
  }


public function indexAction()
  {
   $db = DB::getInstance();
   $contacts = $db->findFirst('contacts',[
     'conditions'=>'lname = ?',
     'bind' => ['Parham']
   ]);
   dnd($contacts);
   $this->view->render('home/index');
  }

}
