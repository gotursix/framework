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
   $contactsQ = $db->query("SELECT * FROM contacts ORDER BY lname,fname");
   $contacts = $contactsQ->results();
   dnd($contacts);
   $this->view->render('home/index');
  }

}
