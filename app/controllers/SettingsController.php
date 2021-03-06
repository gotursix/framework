<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session;
use Core\Router;
use Core\H;
use App\Models\Contacts;
use App\Models\Users;
use App\Models\Settings;
use \PATH_INFO;

class SettingsController extends Controller
{

  public function __construct($controller,$action)
  {
    parent::__construct($controller,$action);
    $this->view->setLayout('default');
      $this->load_model('Settings');
      $this->load_model('Album');
      $this->load_model('Contain');
  }

  public function restoreAction()
  {
      $settings = $this->SettingsModel->findAllByUserId((int)Users::currentUser()->id , ['order' => 'format , name']);
      $this->view->settings = $settings;
      $this->view->render('settings/index');
  }

  public function deleteAction($id)
  {
        $settings = $this->SettingsModel->findByIdAndUserId((int)$id,Users::currentUser()->id);
        if($settings)
        {
          $album = $this->ContainModel->findByUserIdAndName((int)Users::currentUser()->id , $settings->name);
          foreach ($album as $album) 
          {
            $album->delete();
          }
          $dir = Users::currentUser()->id;
          $delete= $_SERVER['DOCUMENT_ROOT']. PROOT  . 'files' . DS . $dir  . DS . $settings->name ;
          unlink($delete);
          $settings->delete();
          Session::addMsg('success' , 'The file have been permanently deleted.');
        }
        Router::redirect('settings/restore');
  }


  public function recoverAction($id)
  {
        $settings = $this->SettingsModel->findByIdAndUserId((int)$id,Users::currentUser()->id);
        if($settings)
        {
          $dir = Users::currentUser()->id;
          $settings->deleted = 0 ;
          $settings->save();
          Session::addMsg('success' , 'The file have been restored.');
        }
        Router::redirect('settings/restore');
  }

  public function restoreallAction($id)
  {
         $upload = $this->SettingsModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , $id , ['order' => 'format , name']);
        if($upload)
        {
          foreach ($upload as $upload)
          {
            $upload->deleted = 0;  
            $upload->save();
          }
        }
        Session::addMsg('success','The files have been restored.');
        Router::redirect('settings/restore');
  }

  public function deleteallAction($id)
  {
        $upload = $this->SettingsModel->findByAllByUserIdAndFileFormat((int)Users::currentUser()->id , $id , ['order' => 'format , name']);
        if($upload)
        {
          foreach ($upload as $upload)
          {
            $album = $this->ContainModel->findByUserIdAndName((int)Users::currentUser()->id , $upload->name);
            foreach ($album as $album) 
            {
              $album->delete();
            }
            $dir = Users::currentUser()->id;
            $delete= $_SERVER['DOCUMENT_ROOT']. PROOT  . 'files' . DS . $dir  . DS . $upload->name ;
            unlink($delete);
            $upload->delete();
          }
          Session::addMsg('success','The files have been deleted.');
        }
        Router::redirect('settings/restore');
  }


}
