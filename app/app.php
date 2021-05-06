<?php

class App {

  public $baseUrl;
  public $dbh;
  public $router;
  public $currentController;
  public $multipleLang = true;
  public $lang;
  public $allowedLanguages = ['ge', 'en'];
  public $defaultLanguage = 'ge';
  public $appWords;
  public $appInfo;

  public function __construct() {

    $this->baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/temp/';

    require_once 'app/database.php';
    $this->dbh = (new Database())->dbh;

    if (isset($_GET['url'])) {

      $this->router = rtrim($_GET['url'], '/');
      $this->router = filter_var($this->router, FILTER_SANITIZE_URL);
      $this->router = explode('/', $this->router);

      if ($this->multipleLang) {

        if (!in_array($this->router[0], $this->allowedLanguages)) {
          header('Location: ' . $this->baseUrl);
          exit;
        }

        if (isset($this->router[1])) {
          $this->currentController = $this->router[1];
        } else {
          $this->currentController = 'home';
        }

      } else {

        $this->currentController = $this->router[0];

      }

    } else {

      $this->currentController = 'home';

    }

    if (file_exists('app/controllers/' . $this->currentController . '.php')) {

      require_once 'app/controllers/' . $this->currentController . '.php';

      if ($this->multipleLang) {

        if (isset($this->router[0])) {

          $this->lang = $this->router[0];
          array_shift($this->router);
          setcookie('lang', $this->lang, time() + (86400 * 30), '/');

        } else {

          if (isset($_COOKIE['lang'])) {

            if (in_array($_COOKIE['lang'], $this->allowedLanguages)) {

              $this->lang = $_COOKIE['lang'];

            } else {

              setcookie('lang', $this->defaultLanguage, time() + (86400 * 30), '/');
              $this->lang = $this->defaultLanguage;

            }

          } else {

            setcookie('lang', $this->defaultLanguage, time() + (86400 * 30), '/');
            $this->lang = $this->defaultLanguage;

          }

        }

      } else {

        $this->lang = $this->defaultLanguage;

      }

      $this->appWords = json_decode(file_get_contents('app/data/app-words.json'))->{$this->lang};
      $this->appInfo = json_decode(file_get_contents('app/data/app-info.json'));

      $this->currentController = new $this->currentController(
        $this->dbh,
        $this->baseUrl,
        $this->router,
        $this->lang,
        $this->multipleLang,
        $this->allowedLanguages,
        $this->appWords,
        $this->appInfo
      );

    } else {

      header('Location: ' . $this->baseUrl);
      exit;

    }

  }

}
