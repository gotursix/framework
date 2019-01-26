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
   $sql="SELECT * FROM CONTACTS";
   $contactsQ = $db->query($sql);
   dnd($contactsQ);
   $this->view->render('home/index');
  }


}
