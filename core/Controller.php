<<?php

class Controller extends Application
{
  protected s_controller , s_action;
  public $view;

 public fuction __construct($controller,$action)
   {
     parent::__construct();
     this->controller = $controller;
     this->action = $action;
     this->view = new view();
   }

   
}
