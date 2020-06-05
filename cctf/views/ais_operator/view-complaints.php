<?php
    include_once("../common/head.php");
    require "../../model/database.php";
	require "../../controller/complaints.php";
	
	$complaint = new Complaints();
	
?>

    <title>Complaints</title>
</head>


<body class="">

<div class="page-wrapper">
    
    <?php
        include_once("../common/header.php");
    ?>
    
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    


                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
    <h1>Customer Complaints</h1>
</div><!-- /.page-title -->

<div class="posts">
    
        <?php
        
        foreach ($complaint->get() as $c) {
            
            ?>
            
            
            <div class="post post-boxed">
                <div class="post-image" style="display:none">
                    <img src="assets/img/tmp/product-11.jpg" alt="A Clockwork Origin">
                    <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
                </div><!-- /.post-image -->
    
                <div class="post-content">
                    <h2><a href="complaint-detail.php?id=<?php echo $c['complaint_id'];?>"><?php echo $c['complaint_title'];?><a></h2>

                   <?php  $cust_complaint = substr($c['cust_complaint'],0,50); 
                   
                          $date_received = strtotime($c['date_received']); $date_received = date("Y-m-d H:i", $date_received);
                          $date_acknowledged = strtotime($c['date_acknowledged']); $date_acknowledged = date("Y-m-d H:i", $date_acknowledged);
                          $date_forwarded = strtotime($c['date_forwarded']); $date_forwarded = date("Y-m-d H:i", $date_forwarded);
                          $date_responded = strtotime($c['date_responded']); $date_responded = date("Y-m-d H:i", $date_responded);
                          
                          $complaint_status = $c['complaint_status'];
                   ?>
                    
                    <p><?php echo $cust_complaint;?>...</p>
                </div><!-- /.post-content -->
    
                <div class="post-meta clearfix">
                    <div class="post-meta-author">By <a href="blog-detail.html"><?php echo $c['cust_name'];?></a></div><!-- /.post-meta-author -->
                    <div class="post-meta-date"><?php echo $date_received;?></div><!-- /.post-meta-date -->
                    <div class="post-meta-categories"><i class="fa fa-envelope"></i> <a>Received</a></div><!-- /.post-meta-categories -->
                    
                    <?php
                    if ($complaint_status == 1){
                        ?>
                        <div class="post-meta-categories"><i class="fa fa-flag-checkered"></i> <a title="<?php echo $date_acknowledged;?>" data-toggle="tooltip" data-placement="bottom" href="#">Acknowledged</a></div><!-- /.post-meta-categories -->
                        <?php
                    }else if($complaint_status == 2){
                        ?>
                        <div class="post-meta-categories"><i class="fa fa-flag-checkered"></i> <a title="<?php echo $date_acknowledged;?>" data-toggle="tooltip" data-placement="bottom" href="#">Acknowledged</a></div><!-- /.post-meta-categories -->
                        <div class="post-meta-comments"><i class="fa fa-comments"></i> <a title="<?php echo $date_responded;?>" data-toggle="tooltip" data-placement="bottom" href="#">Response sent</a></div><!-- /.post-meta-comments -->
                        <?php
                    }else if($complaint_status == 3){
                        ?>
                        <div class="post-meta-categories"><i class="fa fa-flag-checkered"></i> <a title="<?php echo $date_acknowledged;?>" data-toggle="tooltip" data-placement="bottom" href="#">Acknowledged</a></div><!-- /.post-meta-categories -->
                        <div class="post-meta-categories"><i class="fa fa-share"></i> <a title="<?php echo $date_forwarded;?>" data-toggle="tooltip" data-placement="bottom" href="#">Forwarded</a></div><!-- /.post-meta-categories -->
                        <?php
                    }else if($complaint_status == 4){
                        ?>
                        <div class="post-meta-categories"><i class="fa fa-flag-checkered"></i> <a title="<?php echo $date_acknowledged;?>" data-toggle="tooltip" data-placement="bottom" href="#">Acknowledged</a></div><!-- /.post-meta-categories -->
                        <div class="post-meta-categories"><i class="fa fa-share"></i> <a title="<?php echo $date_forwarded;?>" data-toggle="tooltip" data-placement="bottom" href="#">Forwarded</a></div><!-- /.post-meta-categories -->
                        <div class="post-meta-comments"><i class="fa fa-comments"></i> <a title="<?php echo $date_responded;?>" data-toggle="tooltip" data-placement="bottom" href="#">Response sent</a></div><!-- /.post-meta-comments -->
                        <?php
                    }
                    ?>
                    
                    <div class="post-meta-more"><a href="complaint-detail.php?id=<?php echo $c['complaint_id'];?>">Read More <i class="fa fa-chevron-right"></i></a></div><!-- /.post-meta-more -->
                </div><!-- /.post-meta -->
            </div><!-- /.post -->
        
        <?php
        }
    ?>    

</div><!-- /.posts -->


<div class="pager" style="display:none">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">5</a></li>
        <li class="active"><a>6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div><!-- /.pagination -->


                        </div><!-- /.content -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-4 col-lg-3">
                        
                    <?php
                        include_once("../common/complaints_sidebar.php");
                    ?>
                        
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
    
    <?php
        include_once("../common/footer.php");
    ?>

</div><!-- /.page-wrapper -->

<?php
        include_once("../common/bottom.php");
?>

</body>
</html>
