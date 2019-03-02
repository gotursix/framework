<?php
namespace Core;

class H
{
  public static function dnd($data) //debug function
  {
   echo '<pre>';
   var_dump($data);
   echo '</pre>';
    die();

  }

  public static function currentPage()
  {
    $currentPage = $_SERVER['REQUEST_URI'];
    if($currentPage == PROOT || $currentPage == PROOT.'/home/index')
    {
      $currentPage = PROOT . 'home';
    }
    return $currentPage ;
  }

   public static function getObjectProperties($obj)
  {
    return get_object_vars($obj);
  }

   public static function stringcheck($search, $string)
   {
     return (strpos($string, $search) !== false);
   }

   public static function format($format)
   {
     $string = '';
     if($format == 1)
       $string .= 'Images';

     if($format == 2)
         $string .= 'Video';

    if($format == 3)
       $string .= 'Audio';

    if($format == 4)
      $string .= 'Documents';

      return $string;
   }




}
