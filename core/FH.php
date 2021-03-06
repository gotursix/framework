<?php
  namespace Core;
  use Core\Session;
  use Core\H;

class FH {
  public static function inputBlock($type, $label, $name, $value='', $inputAttrs=[], $divAttrs=[])
  {
    $divString = self::stringifyAttrs($divAttrs);
    $inputString = self::stringifyAttrs($inputAttrs);
    $html = '<div' . $divString . '>';
    $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" placeholder="'.$label.'" value="'.$value.'"'.$inputString.' />';
    $html .= '</div>';
    return $html;
  }

  public static function submitTag($buttonText, $inputAttrs=[])
  {
    $inputString = self::stringifyAttrs($inputAttrs);
    $html = '<input type="submit" value="'.$buttonText.'"'.$inputString.' />';
    return $html;
  }

  public static function submitBlock($buttonText, $inputAttrs=[], $divAttrs=[])
  {
    $divString = self::stringifyAttrs($divAttrs);
    $inputString = self::stringifyAttrs($inputAttrs);
    $html = '<div'.$divString.'>';
    $html .= '<input type="submit" value="'.$buttonText.'"'.$inputString.' />';
    $html .= '</div>';
    return $html;
  }

  public static function stringifyAttrs($attrs)
  {
    $string = '';
    foreach($attrs as $key => $val){
      $string .= ' ' . $key . '="' . $val . '"';
    }
    return $string;
  }

  public static function generateToken()
  {
    $token = base64_encode(openssl_random_pseudo_bytes(32));
    Session::set('csrf_token',$token);
    return $token;
  }

  public static function checkToken($token)
  {
    return (Session::exists('csrf_token') && Session::get('csrf_token') == $token);
  }

  public static function csrfInput(){
    return '<input type="hidden" name="csrf_token" id="csrf_token" value="'.self::generateToken().'" />';
  }

  public static function sanitize($dirty) 
  {
    return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
  }

  public static function posted_values($post)
  {
    $clean_ary = [];
    foreach($post as $key => $value) {
      $clean_ary[$key] = self::sanitize($value);
    }
    return $clean_ary;
  }

  public static function checkboxBlock($label,$name,$checked=false,$inputAttrs=[],$divAttrs=[])
  {
    $divString = self::stringifyAttrs($divAttrs);
    $inputString = self::stringifyAttrs($inputAttrs);
    $checkString = ($checked)? ' checked="checked"' : '';
    $html = '<div'.$divString.'>';
    $html .= '<label for="'.$name.'">'.$label.' <input type="checkbox" id="'.$name.'" name="'.$name.'" value="on"'.$checkString.$inputString.'></label>';
    $html .= '</div>';
    return $html;
  }


  public static function number($thing  , $id)
  {
    $x = 0;
    foreach ($thing as $thing) 
    {
      if($thing->format == $id)
        $x++;
    }
    return $x;
  }

  public static function count($thing)
  {
    $x = 0;
    foreach ($thing as $thing) 
    {
        $x++;
    }
    return $x;
  }

  /**
   * Check if the parameter is in object
   * @param  [object] $thing [make sure it's the object with the record]
   * @param  [string] $in    [make sure it's the name you are searching for]
   * @return [int]        [returns how many times we founded it in the object]
   */
  public static function alreadyin($thing , $in)
  {
    $x=0;
      foreach ($thing as $thing) 
      {
        if($thing->name == $in)
          $x++;
       }
       return $x;
    }


  public static function sendmail($to , $username , $str)
  {
      $url = "https://rufus-framework.com/reset/reset/$str";
      $msg = "A link to reset the password for the user $username have been requested. If you requested it , you can access it here : " . $url;
      mail($to, "Reset password", $msg, "From: admin-rufusframework@rufus-framework.com\r\n");
  }
  

  public static function displayErrors($errors) 
  {
    $hasErrors = (!empty($errors))? ' has-errors' : '';
    $html = '<div class="isa_error_class"><ul class="has-errors'.$hasErrors.'">';
    foreach($errors as $field => $error) {
      $html .= '<li class="alert alert-danger">'.$error.'</li>';
      $html .= '<script>jQuery("document").ready(function(){jQuery("#'.$field.'").parent().closest("div").addClass("has-error");});</script>';
    }
    $html .= '</ul></div>';
    return $html;
  }


}
