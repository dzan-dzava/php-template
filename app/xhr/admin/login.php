<?php

session_start();

if(isset($_POST['login']) && (boolean)$_POST['login'] === true) {

  $administrator = $_POST['administrator'];
  $password = md5($_POST['password']);

  if(!empty($administrator) && !empty($password)) {

    require_once '../../database.php';
    $dbh = (new Database())->dbh;

    $sql = "SELECT name FROM administrators WHERE administrator= BINARY :administrator AND password=:password";
    $sth = $dbh->prepare($sql);
    $sth->execute([
      ':administrator' => $administrator,
      ':password' => $password
    ]);

    if($sth->rowCount() === 1) {

      $row = $sth->fetch(PDO::FETCH_ASSOC);

      $_SESSION['auth_admin'] = [
        'access' => true,
        'name' => $row['name']
      ];

      exit(json_encode(['access' => true]));

    } else {
    
      exit(json_encode(['access' => false]));

    }

  } else {

    exit(json_encode(['access' => false]));

  }

}