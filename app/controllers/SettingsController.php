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
          $dir = Users::currentUser()->id;
          unlink('framework/files/4/peep(2).jpg');
         //$settings->delete();
          Session::addMsg('success' , 'The file have been permanently deleted.');
        }
        Router::redirect('settings/restore');
  }


}
