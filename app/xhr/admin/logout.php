<?php

session_start();

if(isset($_GET['logout']) && (boolean)$_GET['logout'] === true) {

  unset($_SESSION['auth_admin']);

  exit(json_encode(['accessDenied' => true]));

}