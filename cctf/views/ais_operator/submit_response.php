<?php
    
    //collect submitted values
	$responder = $_POST['responder'];
	$response = $_POST['response'];
	$complaint_id = $_POST['complaint_id'];
	$complaint_status = $_POST['complaint_status'];
	
	require "../../model/database.php";                 //call database class
	require "../../controller/complaints.php";          //call complaints class
	
	$complaint = new Complaints();                      //create an instance of the complaints object
	
	$complaint->submit_Response($responder, $response, $complaint_id, $complaint_status);   //call function  to attach response to a complaint
	
?>
<script type='text/javascript'>
    console.log('<?php echo $complaint_id;?>')
    window.location.href = "complaint-detail.php?id=<?php echo $complaint_id;?>";       //redirect back to the complaint after submitting the response
</script>