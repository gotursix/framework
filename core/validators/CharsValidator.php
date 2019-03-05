<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;
use Core\H;

class CharsValidator extends CustomValidator
{

  public function runValidation()
  {
    $value = (int)0;
    $string = $this->_model->{$this->field};
    $search = "?"; //working good
    $search2 = "|"; //working good
    $search3 = "/"; //wprking good
    $search4 = '\\'; //working good
    $search5 = htmlspecialchars("<"); //working good
    $search6 = htmlspecialchars(">"); //working good
    $search7 = ":"; //working good
    $search8 = htmlspecialchars('"'); //working good


     if(H::stringcheck($search, $string) === true ||  $string[0] === $search)
     {
       $value++;
     }

     if(H::stringcheck($search2, $string) === true ||  $string[0] === $search2)
     {
       $value++;
     }

     if(H::stringcheck($search3, $string) === true ||  $string[0] === $search3)
     {
       $value++;
     }

     if(H::stringcheck($search4, $string) === true ||  $string[0] === $search4)
     {
       $value++;
     }

     if(H::stringcheck($search5, $string) === true ||  $string[0] === $search5)
     {
       $value++;
     }

     if(H::stringcheck($search6, $string) === true ||  $string[0] === $search6)
     {
       $value++;
     }

     if(H::stringcheck($search7, $string) === true ||  $string[0] === $search7)
     {
       $value++;
     }

     if(H::stringcheck($search8, $string) === true ||  $string[0] === $search8)
     {
       $value++;
     }

     return $value ==  $this->rule;
  }




}
