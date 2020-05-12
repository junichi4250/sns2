<?php

namespace MyApp\Exception;

class UnmatchEmailorPassword extends \Exception {
  protected $message = "email/password do not match!";
}

 ?>
