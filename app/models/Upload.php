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

class Upload extends Model
{
    public $id , $user_id , $name , $deleted=0, $format ;

    public function __construct()
    {
      $table = 'files';
      parent::__construct($table);
      $this->_softDelete = true ;

    }

    public function validator()
    {
      $this->runValidation(new FileValidator($this,['field'=>'name','msg'=>'You already have a file named like that, please choose another name.' , 'rule'=> Users::currentUser()->id]));
      $this->runValidation(new MaxValidator($this , ['field'=>'name','msg'=>'Your name must be less than 150 characters', 'rule'=>'155']));
      $this->runValidation(new MinValidator($this , ['field'=>'name','msg'=>'Your name must be at least 4 characters', 'rule'=>'4']));
      $this->runValidation(new FormatValidator($this, ['field'=>'format', 'msg'=>'The file format is not accepted.', 'rule'=>[ '1' , '2'  , '3' , '4'] ]));
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

    public function findByAllByUserIdAndFileFormat($user_id , $format ,$params=[])
    {
      $conditions = [
        'conditions' => 'user_id = ? AND format = ?',
        'bind' => [$user_id , $format]
      ];
      $conditions = array_merge($conditions, $params);
      return $this->find($conditions);
    }

   public static function setFormat($value)
    {
      $img = array('jpg','png','bmp','gif','jpeg');
      $video = array('mp4','avi','vlc');
      $audio = array('mp3');
      $doc = array('pdf','svg');

      if(in_array($value ,$img))
      return 1;

      if(in_array($value ,$video))
      return 2;

      if(in_array($value ,$audio))
      return 3;

      if(in_array($value ,$doc))
      return 4;

      return 0;
    }



}
