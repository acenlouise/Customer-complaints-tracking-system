<?php
    //require "../../model/database.php";
	//require "../../controller/complaints.php";
	
	$complaint = new Complaints();
	
?>

<div class="sidebar">
                            <div class="widget">
    <h2 class="widgettitle"><a href="view-complaints.php">New Complaints</a></h2>
    
    <div class="p20 background-white">
        <div class="working-hours">
        
    <?php
    $complaint_status = 0;
    
    foreach ($complaint->get_complaints_bystatus($complaint_status) as $c) {
	     $complaint_title = substr($c['complaint_title'],0,25);
	     $cust_name = substr($c['cust_name'],0,7);
         ?>
         
        <div class="day clearfix">
    			<a href="complaint-detail.php?id=<?php echo $c['complaint_id'];?>"><span class="name"><?php echo $cust_name;?>..</span><span class="hours"><?php echo $complaint_title;?>...</span></a>
    		</div><!-- /.day -->
        <?php
	 }
	 ?>

        </div>
    </div>
    
    
</div><!-- /.widget -->

                            
        <div class="widget">
            <h2 class="widgettitle">Acknowledged</h2>
            
            <div class="p20 background-primary">
                <div class="working-hours">
                
            <?php
            $complaint_status = 1;
            
            foreach ($complaint->get_complaints_bystatus($complaint_status) as $c) {
        	     $complaint_title = substr($c['complaint_title'],0,25);
        	     $cust_name = substr($c['cust_name'],0,7);
                 ?>
                 
                <div class="day clearfix" >
            			<a style="color:#fff" href="complaint-detail.php?id=<?php echo $c['complaint_id'];?>"><span class="name"><?php echo $cust_name;?>..</span><span class="hours"><?php echo $complaint_title;?>...</span></a>
            		</div><!-- /.day -->
                <?php
        	 }
        	 ?>
        
                </div>
            </div>
        
            
        </div><!-- /.widget -->


                            <div class="widget">
    <h2 class="widgettitle">Forwarded Complaints</h2>

            <div class="p20 background-secondary">
                <div class="working-hours">
                
            <?php
            $complaint_status = 3;
            
            foreach ($complaint->get_complaints_bystatus($complaint_status) as $c) {
        	     $complaint_title = substr($c['complaint_title'],0,25);
        	     $cust_name = substr($c['cust_name'],0,7);
                 ?>
                 
                <div class="day clearfix">
            			<a style="color:#fff" href="complaint-detail.php?id=<?php echo $c['complaint_id'];?>"><span class="name"><?php echo $cust_name;?>..</span><span class="hours"><?php echo $complaint_title;?>...</span></a>
            		</div><!-- /.day -->
                <?php
        	 }
        	 ?>
        
                </div>
            </div>
</div><!-- /.widget -->


<div class="widget">
    <h2 class="widgettitle">Responded</h2>

    <ul class="menu">
        
        <?php
            $complaint_status = 2;
            
            foreach ($complaint->get_complaints_bystatus($complaint_status) as $c) {
        	     $complaint_title = substr($c['complaint_title'],0,25);
        	     $cust_name = substr($c['cust_name'],0,7);
                 ?>
            	<li><a href="complaint-detail.php?id=<?php echo $c['complaint_id'];?>"><?php echo $complaint_title;?>...<strong class="pull-right"><?php echo $cust_name;?>..</strong></a></li>
                <?php
        	 }
        	 
        	 $complaint_status = 4;
            
            foreach ($complaint->get_complaints_bystatus($complaint_status) as $c) {
        	     $complaint_title = substr($c['complaint_title'],0,25);
        	     $cust_name = substr($c['cust_name'],0,7);
                 ?>
            	<li><a href="complaint-detail.php?id=<?php echo $c['complaint_id'];?>"><?php echo $complaint_title;?>...<strong class="pull-right"><?php echo $cust_name;?>..</strong></a></li>
                <?php
        	 }
        	 
        	 ?>
    </ul><!-- /.menu -->
</div><!-- /.wifget -->

</div><!-- /.sidebar -->