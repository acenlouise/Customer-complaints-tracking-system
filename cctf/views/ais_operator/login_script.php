<?php
    //collect submitted values
	$username = $_POST['name'];
	$password = $_POST['password'];
	
	$password = md5($password);                     //encrypt submitted password using md5

	require "../../model/database.php";             //create database class
	require "../../controller/ais_operators.php";   //create ais operator class
	
	$operator = new Operators();                    //create an instance of the operator object
	
	$authenticate_user = $operator->get_operator_login($username, $password);   //call function to check for the record of user attempting to login 
	
	if (!$authenticate_user){                       //if record does not exist, redirect to login page
	    
	    ?>
	    <script type='text/javascript'>
            window.location.href = "operator_login.php?loginfail=1";
        </script>
	    
	    <?php
	}else{                                          //if record exists, redirect to complaints page
	    
	    ?>
	    <script type='text/javascript'>
            window.location.href = "view-complaints.php";
        </script>
	    
	    <?php
	    
	}
	
?>
