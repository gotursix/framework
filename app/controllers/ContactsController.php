<?php

class ContactsController extends Controller
{

  public function __construct($controller,$action)
  {
    parent::__construct($controller,$action);
    $this->view->setLayout('default');
    $this->load_model('Contacts');
  }


  public function indexAction()
  {
    $contacts = $this->ContactsModel->findAllByUserId(Users::currentLoggedInUser()->id);

      $this->view->contacts = $contacts;
      $this->view->render('contacts/index');
  }

  public function addAction()
  {
    $contact = new Contacts();
    $validation = new Validate();

    if($_POST)
    {
      $contact->assign($_POST);
      $validation->check($_POST, Contacts::$addValidation);
      if($validation->passed())
      {
        $contact->user_id = Users::currentLoggedInUser()->id;
        $contact->deleted = 0;
        $contact->save();
        Router::redirect('contacts');
      }
    }
    $this->view->contact = $contact ;
    $this->view->displayErrors = $validation->displayErrors();
    $this->view->postAction = PROOT . 'contacts' . DS . 'add';
    $this->view->render('contacts/add');
  }
}
