<?php

class Test {

  public function __construct($dbh, $baseUrl, $router, $lang, $multipleLang, $allowedLanguages, $appWords, $appInfo) {

    if(isset($router[1])) {

      if(method_exists($this, $router[1])) {

        $this->{$router[1]}($dbh, $baseUrl, $router, $lang, $multipleLang, $allowedLanguages, $appWords, $appInfo);

      } else {

        header('Location: ' . $baseUrl);
        exit;

      }

    } else {

      $this->index($dbh, $baseUrl, $router, $lang, $multipleLang, $allowedLanguages, $appWords, $appInfo);

    }

  }

  public function index($dbh, $baseUrl, $router, $lang, $multipleLang, $allowedLanguages, $appWords, $appInfo) {

    $sql = "SELECT page_title_{$lang}, meta_desc_{$lang} FROM pages WHERE name='home'";
    $sth = $dbh->query($sql);
    $pageData = $sth->fetch(PDO::FETCH_ASSOC);

    echo 'test';

  }

}
