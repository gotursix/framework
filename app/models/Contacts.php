<?php
namespace App\Models;
use Core\Model;
use Core\H;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;
use Core\Validators\MaxValidator;

class Contacts extends Model
{
    public $id , $user_id , $fname , $lname, $email , $address , $address2 , $city , $state, $zip ;
    public $home_phone , $cell_phone, $work_phone ,  $deleted = 0;

    public function __construct()
    {
      $table = 'contacts';
      parent::__construct($table);
      $this->_softDelete = true ;
    
    }


    public function validator()
    {
      $this->runValidation(new RequiredValidator($this,['field'=>'fname','msg'=>'First Name is required.']));
      $this->runValidation(new RequiredValidator($this,['field'=>'lname','msg'=>'Last name is required.']));
      $this->runValidation(new MaxValidator($this , ['field'=>'fname','msg'=>'First Name must be less than 150 characters', 'rule'=>'155']));
      $this->runValidation(new MaxValidator($this , ['field'=>'lname','msg'=>'Last Name must be less than 150 characters', 'rule'=>'155']));
      $this->runValidation(new UniqueValidator($this, ['field'=>'lname', 'msg'=>'Last name already exists, please chose another one.']));
      $this->runValidation(new UniqueValidator($this, ['field'=>'fname', 'msg'=>'First name already exists, please chose another one.']));
    }


    public function findAllByUserId($user_id,$params=[])
    {
      $conditions = [
        'conditions' => 'user_id = ?',
        'bind' => [$user_id]
      ];

      $conditions = array_merge($conditions, $params);
      return $this->find($conditions);
    }


    public function displayName()
    {
      return $this->fname . ' ' . $this->lname;
    }


    public function findByIdAndUserId($contact_id,$user_id,$params=[])
    {
      $conditions =
      [
        'conditions' => 'id = ? AND user_id = ?',
        'bind' => [$contact_id,$user_id]
      ];

      $conditions = array_merge($conditions , $params);
      return $this->findFirst($conditions);
    }


  public function displayAddress()
    {
      $adress = '';
   if(!empty($this->address))
   {
     $adress .= $this->address . '<br>';
   }
   if(!empty($this->address2))
   {
     $adress .= $this->address2 . '<br>';
   }

   if(!empty($this->city))
   {
     $adress .= $this->city . ', ';
   }

   $adress .= $this->state . ' ' . $this->zip . '<br>';
      return $adress ;
    }


    public function displayAddressLabel()
    {
      $html = $this->displayName() . '<br />';
      $html .= $this->displayAddress();
      return $html;
    }


}
