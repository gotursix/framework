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
   $columns = $db->get_columns('contacts');
   dnd($columns);
   $this->view->render('home/index');
  }

}
