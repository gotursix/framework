<?php

class View
{
  protected s_head,s_body,$_siteTitle=SITE_TITLE,$_outputBuffer,s_layout=DEFAULT_LAYOUT;

  public function __construct()
  {

  }

  public function render($viewName)
  {
    $viewAry = explode('/',$viewName);
    $viewString = implode(DS, $viewAry);
    if(file_exists(ROOT . DS . 'app' . DS . 'views'. DS . $viewString . '.php'))
    {
      include(ROOT . DS . 'app' . DS . 'views'. DS . $viewString . '.php');
      include(ROOT . DS . 'app' . DS . 'views'. DS .'layouts' . DS . $this->layout . '.php');
    }else
    die('The view\"'.$viewName.'\" does not exist.');
  }

public function content($type)
   {
     if($type == 'head')
     {
       return $this->head;
     }elseif($type == 'body')
     {
       return $this->body;
     }
     return false;
   }

public function start($type)
   {
    $this->$_outputBuffer = $type;
    ob_start();
   }

public function end()
    {

    }

public function siteTitle()
   {
     return $this->_siteTitle;
   }


public function setSiteTitle($title)
   {
     this-siteTitle=$title;
   }

public function set Layout($path)
  {
    this->layout=$path;
  }



}
