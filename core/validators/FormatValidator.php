<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;
use Core\H;

class FormatValidator extends CustomValidator
{

  public function runValidation()
  {
    $value = $this->_model->{$this->field};

    return in_array($value,$this->rule);
  }

}
