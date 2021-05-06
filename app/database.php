<?php

class Database {

  const HOST = 'localhost';
  const USER = 'root';
  const PASSWORD = '';
  const DATABASE = 'temp';

  public $dbh;

  public function __construct() {

    try {

      $this->dbh = new PDO('mysql:host='.self::HOST.';dbname='.self::DATABASE.';charset=utf8', self::USER, self::PASSWORD);

    } catch (PDOException $e) {

      die('Cannot connect to database');

    }

  }

}
