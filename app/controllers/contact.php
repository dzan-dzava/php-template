<?php

class Contact {

  public function __construct($dbh, $baseUrl, $router, $lang, $multipleLang, $allowedLanguages, $appWords, $appInfo) {

    $sql = "SELECT page_title_{$lang}, meta_desc_{$lang} FROM pages WHERE name=:page_name";
    $sth = $dbh->prepare($sql);
    $sth->execute([':page_name' => $router[0]]);
    $pageData = $sth->fetch(PDO::FETCH_ASSOC);

    require_once 'app/views/contact/index.php';

  }

}
