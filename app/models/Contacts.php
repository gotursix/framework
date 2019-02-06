<?php

class Contacts extends Model
{
    public $deleted = 0;

    public function __construct()
    {
      $table = 'contacts';
      parent::__construct($table);
      $this->_softDelete = true ;
    }

    public static $addValidation = [
      'fname' => [
        'display' => 'First Name',
        'required' => true,
        'max' => 100
      ],
      'lname' =>
      [
        'display' => 'Last Name',
        'required' => true,
        'max' => 100
      ],
    ];

    public function findAllByUserId($user_id,$params=[])
    {
      $conditions = [
        'condition' => 'user_id = ?',
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
