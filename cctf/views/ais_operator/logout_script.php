<?php

	#$username = $_POST['name'];
	#$password = $_POST['password'];
	
	#$password = md5($password);

	require "../../model/database.php";
	require "../../controller/ais_operators.php";
	$operator = new Operators();
	
	$authenticate_user = $operator->get_operator_login($username, $password);
	
	if (!$authenticate_user){
	    
	    ?>
	    <script type='text/javascript'>
            window.location.href = "operator_login.php?loginfail=1";
        </script>
	    
	    <?php
	}else{
	    
	    ?>
	    <script type='text/javascript'>
            window.location.href = "operator_login.php";
        </script>
	    
	    <?php
	    
	}
	
?>
