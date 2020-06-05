<?php

	$complaint_id = $_POST['complaint_status_id'];
	$status = $_POST['status'];
	
	require "../../model/database.php";
	require "../../controller/complaints.php";
	
	$complaint = new Complaints();
	
	//$complaint->submit_Response($responder, $response, $complaint_id);
	$complaint->submit_Status($status, $complaint_id);
	
?>
<script type='text/javascript'>
    console.log('<?php echo $complaint_id;?>')
    window.location.href = "complaint-detail.php?id=<?php echo $complaint_id;?>";
</script>