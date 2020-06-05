<?php

// the database class
class DB {
  private $pdo = null;
  private $stmt = null;

  function __construct(){
    try {
      $this->pdo = new PDO(
        "mysql:host=localhost;dbname=myaipunitasks_cctf;charset=utf8", 
        "myaipunitasks_louise", "*7HA,5iuFO]0", [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
      );
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  function __destruct(){
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

//function to fetch records from database
  function select($sql, $cond=null){
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->stmt->fetchAll();
    } catch (Exception $ex) { die($ex->getMessage()); }
    $this->stmt = null;
    return $result;
  }

//function to perform any other database query
  function query($sql, $cond=[]){
    try {
     
       $this->stmt = $this->pdo->prepare($sql);
       $this->stmt->execute($cond);
      
    } catch (Exception $ex) { 
      $this->error = $ex->getMessage();
      return false;
    }
    $this->stmt = null;
    return true;
  }
  
}
?>