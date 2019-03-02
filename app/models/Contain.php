<?php
namespace App\Models;
use Core\Model;
use Core\H;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;
use Core\Validators\MaxValidator;
use Core\Validators\MinValidator;
use Core\Validators\CharsValidator;

class Contain extends Model
{
    public $id , $user_id , $name , $album_id , $language = array('');

    public function __construct()
    {
      $table = 'content';
      parent::__construct($table);
      $this->_softDelete = false ;

    }


    public function validator()
    {
      $this->runValidation(new RequiredValidator($this,['field'=>'name','msg'=>'Name is required.']));
      $this->runValidation(new MaxValidator($this , ['field'=>'name','msg'=>'Name must be less than 150 characters', 'rule'=>'155']));
      $this->runValidation(new MinValidator($this , ['field'=>'name','msg'=>'Name must be at least 4 characters', 'rule'=>'4']));
      $this->runValidation(new CharsValidator($this, ['field'=>'name', 'msg'=>'The file name can not contain ? | / \ < > : " ', 'rule'=> '0' ]));

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




}
