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
    $search = "?";
    $search2 = "|";
    $search3 = "/";
    $search4 = '\\';
    $search5 = "<";
    $search6 = ">";
    $search7 = ":";
    $search8 = '"';

     if(H::stringcheck($search, $string) === true )
     {
       $value++;
     }

     if(H::stringcheck($search2, $string) === true)
     {
       $value++;
     }

     if(H::stringcheck($search3, $string) === true)
     {
       $value++;
     }

     if(H::stringcheck($search4, $string) === true)
     {
       $value++;
     }

     if(H::stringcheck($search5, $string) === true)
     {
       $value++;
     }

     if(H::stringcheck($search6, $string) === true)
     {
       $value++;
     }

     if(H::stringcheck($search7, $string) === true)
     {
       $value++;
     }

     if(H::stringcheck($search8, $string) === true)
     {
       $value++;
     }

     return $value ==  $this->rule;
  }




}
