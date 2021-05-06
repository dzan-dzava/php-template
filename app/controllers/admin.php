<?php

class Admin {

  public function __construct($dbh, $baseUrl, $router, $lang, $multipleLang, $allowedLanguages, $appWords, $appInfo) {

    $adminUrl = $multipleLang ? $baseUrl . $lang . '/' . $router[0] : $baseUrl . $router[0];
    $router = array_slice($router, 1);

    if (isset($router[0]) && $router[0] === 'login') {
      if ($this->checkAdminSession()) {
        header('Location: ' . $adminUrl);
        exit;
      } else {
        $this->login($dbh, $baseUrl, $router, $multipleLang, $allowedLanguages, $appInfo, $adminUrl);
      }
    } else {
      if (!$this->checkAdminSession()) {
        header('Location: ' . $adminUrl . '/login');
        exit;
      } else {
        if (isset($router[0])) {
          if (method_exists($this, $router[0]) && $router[0] !== 'checkAdminSession') {
            $this->{$router[0]}($dbh, $baseUrl, $router, $multipleLang, $allowedLanguages, $appInfo, $adminUrl);
          } else {
            header('Location: ' . $adminUrl);
            exit;
          }
        } else {
          $this->index($dbh, $baseUrl, $router, $multipleLang, $allowedLanguages, $appInfo, $adminUrl);
        }
      }
    }

  }

  private function checkAdminSession() {
    return (isset($_SESSION['auth_admin']) && $_SESSION['auth_admin']['access'] === true) ? true : false;
  }

  public function login($dbh, $baseUrl, $router, $multipleLang, $allowedLanguages, $appInfo, $adminUrl) {
    require_once 'app/views/admin/login.php';
  }

  public function index($dbh, $baseUrl, $router, $multipleLang, $allowedLanguages, $appInfo, $adminUrl) {
    require_once 'app/views/admin/index.php';
  }

  public function news($dbh, $baseUrl, $router, $multipleLang, $allowedLanguages, $appInfo, $adminUrl) {
    if (!isset($router[1])) {
      header('Location: ' . $adminUrl);
      exit;
    }

    if ($router[1] === 'add') {
      require_once 'app/views/admin/news-add.php';
    }

    if ($router[1] === 'list') {
      require_once 'app/views/admin/news-list.php';
    }
  }

}