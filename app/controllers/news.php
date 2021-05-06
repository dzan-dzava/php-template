<?php

class News {

  public function __construct($dbh, $baseUrl, $router, $lang, $multipleLang, $allowedLanguages, $appWords, $appInfo) {

    $sql = "SELECT page_title_{$lang}, meta_desc_{$lang} FROM pages WHERE name='news'";
    $sth = $dbh->query($sql);
    $pageData = $sth->fetch(PDO::FETCH_ASSOC);

    require_once 'app/views/news/index.php';

  }

}
