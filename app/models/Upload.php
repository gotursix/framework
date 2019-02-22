<?php
namespace App\Models;
use Core\Model;
use Core\H;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;
use Core\Validators\MaxValidator;
use Core\Validators\MinValidator;

class Upload extends Model
{
    public $id , $user_id , $name , $deleted=0 ;

    public function __construct()
    {
      $table = 'files';
      parent::__construct($table);
    }

    public function validator()
    {
      $this->runValidation(new RequiredValidator($this,['field'=>'name','msg'=>'You must chose a name for the file.']));
      $this->runValidation(new MaxValidator($this , ['field'=>'name','msg'=>'Your name must be less than 150 characters', 'rule'=>'155']));
      $this->runValidation(new MinValidator($this , ['field'=>'name','msg'=>'Your name must be more than 4 characters', 'rule'=>'4']));
      $this->runValidation(new UniqueValidator($this, ['field'=>'name', 'msg'=>'There is already a file with that name, please chose another one.']));
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


}
