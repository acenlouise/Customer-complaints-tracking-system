<?php

//the ais operators class
class Operators extends DB {
    
    //function to fetch all records of ais operators
  function get(){
    return $this->select("SELECT * FROM `operator`");
  }
  
  //function to check if there is a record for the operator attempting to login
  function get_operator_login($usernm, $passwd){
    return $this->select("SELECT * FROM `operator` WHERE username = ? and password = ?",[$usernm,$passwd]);
  }
  
}

?>



