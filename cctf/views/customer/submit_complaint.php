<?php
    //collect submitted values
	$user = $_POST['name'];
	$email = $_POST['email'];
	$client_complaint = $_POST['complaint'];
	$complaint_title = $_POST['complainttitle'];
	
	require "../../model/database.php";                 //create database class
	require "../../controller/complaints.php";          //create complaints class
	
	$complaint = new Complaints();                      //create an instance of the complaints object
	
	$complaint->put_Comp($user, $email, $complaint_title, $client_complaint);       //call function  to submit a record of a new complaint
	
?>
<script type='text/javascript'>
window.location.href = "customer-complaint.php?submitted=1";
</script>