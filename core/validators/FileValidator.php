<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;
use Core\H;

class FileValidator extends CustomValidator{

  public function runValidation()
  {

    $string = $this->_model->{$this->field};

    $filepath="";
    $filepath .= ROOT . DS . 'files' . DS . $this->rule . DS . $string;

   if (!file_exists($filepath))
    {
      return true;
    }
    return false;
  }
}
