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
    public $id , $user_id , $name  , $album_id ;

    public function __construct()
    {
      $table = 'content';
      parent::__construct($table);
      $this->_softDelete = false ;
    }

    public function validator()
    { }


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



    public function findByAlbumIdAndUserId($album_id,$user_id,$params=[])
    {
      $conditions =
      [
        'conditions' => 'album_id = ? AND user_id = ?',
        'bind' => [$album_id,$user_id]
      ];
      $conditions = array_merge($conditions , $params);
      return $this->find($conditions);
    }


}
