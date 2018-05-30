<?php

class Database{
  // private $host = 'localhost';
  // private $user = 'root';
  // private $password = '';
  // private $dbname = 'wwproject_c0_pl';

  private $host = 'mysql.cba.pl';
  private $user = 'wwproject.c0.pl';
  private $password = 'Previad4d2006';
  private $dbname = 'wwproject_c0_pl';

  private $dbh;
  private $error;
  private $stmt;

  public function __construct() {
    // Set DSN
    $dsn = 'mysql:host='. $this->host . ';dbname=' . $this->dbname;
    // Set Options
    $options = array(
      PDO::ATTR_PERSISTENT  =>  true,
      PDO::ATTR_ERRMODE     =>  PDO::ERRMODE_EXCEPTION
    );
    // Create new PDO
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
    } catch(PDOException $e) {
      // $this->error = $e->getMessage();
      echo 'No DB connection. Exiting.';
      die();
    }
  }

  public function query($query) {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param, $value, $type = null) {
    if(is_null($type)) {
      switch(true) {
        case is_int($value):
            $type = PDO::PARAM_INT;
            break;
        case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
        case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
        default:
        $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }

  public function execute() {
    return $this->stmt->execute();
  }

}

$database = new Database;
