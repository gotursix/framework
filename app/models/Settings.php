<?php
namespace App\Models;
use Core\Model;
use Core\H;
use App\Models\Users;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;
use Core\Validators\MaxValidator;
use Core\Validators\MinValidator;
use Core\Validators\FormatValidator;
use Core\Validators\CharsValidator;
use Core\Validators\FileValidator;

class Settings extends Model
{
    public $id , $user_id , $name , $deleted=0, $format ;

    public function __construct()
    {
      $table = 'files';
      parent::__construct($table);
      $this->_softDelete = false ;
    }

    public function validator()
    { }

    public function findAllByUserId($user_id,$params=[])
    {
      $conditions = [
        'conditions' => 'user_id = ? AND deleted = 1',
        'bind' => [$user_id]
      ];
      $conditions = array_merge($conditions, $params);
      return $this->find($conditions);
    }

    public function findByIdAndUserId($contact_id,$user_id,$params=[])
    {
      $conditions =
      [
        'conditions' => 'id = ? AND user_id = ? ',
        'bind' => [$contact_id,$user_id]
      ];

      $conditions = array_merge($conditions , $params);
      return $this->findFirst($conditions);
    }

    public function findByAllByUserIdAndFileFormat($user_id , $format ,$params=[])
    {
      $conditions = [
        'conditions' => 'user_id = ? AND format = ?',
        'bind' => [$user_id , $format]
      ];
      $conditions = array_merge($conditions, $params);
      return $this->find($conditions);
    }




}
