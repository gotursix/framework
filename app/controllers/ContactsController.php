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
}
