<?php

class UserSessions extends Model {

  public $id,$user_id,$session,$user_agent;

  public function __construct() {
    $table = 'user_sessions';
    parent::__construct($table);
  }

  public static function getFromCookie() {
    $userSession = new self();
    if(COOKIE::exists(REMEMBER_ME_COOKIE_NAME)) {
      $userSession = $userSession->findFirst([
        'conditions' => "user_agent = ? AND session = ?",
        'bind' => [Session::uagent_no_version(), COOKIE::get(REMEMBER_ME_COOKIE_NAME)]
      ]);
    }
    if(!$userSession) return false;
    return $userSession;
  }
}
