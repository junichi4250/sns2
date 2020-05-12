<?php

namespace MyApp\Controller;

class Index extends \MyApp\Controller {

  public function run() {
    if (!$this->isLoggedIn()) {
      header ('Location: ' . SITE_URL . '/login.php');
    }

    $usersModel = new \MyApp\Model\User();
    $this->setValues('users', $usersModel->findAll());

  }
}


 ?>
