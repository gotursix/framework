<?php

class Home extends Controller
{

public function __construct($controller,$action)
  {
      parent::__construct($controller,$action);
  }

public function indexAction()
  {
    die('Welcome to the home controller , this is the index action.');
  }



}
