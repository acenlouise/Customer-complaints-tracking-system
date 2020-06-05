<?php
    include_once("../common/head.php");
    require "../../model/database.php";
	require "../../controller/complaints.php";
	
	$complaint_id = $_GET['id'];
	
	$complaint = new Complaints();
	
	 foreach ($complaint->get_complaints($complaint_id) as $c) {
	     
	     $cust_name = $c['cust_name'];
	     $complaint_title = $c['complaint_title'];
	     $cust_complaint = $c['cust_complaint'];
	     
	     $response = $c['response'];
	     $responder = $c['responder'];
	     
	     $date_received = strtotime($c['date_received']); $date_received = date("Y-m-d H:i", $date_received);
          $date_acknowledged = strtotime($c['date_acknowledged']); $date_acknowledged = date("Y-m-d H:i", $date_acknowledged);
          $date_forwarded = strtotime($c['date_forwarded']); $date_forwarded = date("Y-m-d H:i", $date_forwarded);
          $date_responded = strtotime($c['date_responded']); $date_responded = date("Y-m-d H:i", $date_responded);
          
         $complaint_status = $c['complaint_status'];   
	 }
?>

    <title>Complaint Detail</title>
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
    <h1><?php echo $complaint_title; ?></h1>
</div><!-- /.page-title -->

<div class="posts post-detail">

    <div class="post-meta clearfix">
        <div class="post-meta-author">By <a href="blog-detail.html"><?php echo $cust_name; ?></a></div><!-- /.post-meta-author -->
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
    </div><!-- /.post-meta -->

    <div class="post-content">
       <!-- <p class='drop-cap'>Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. How much did you? Wow! A superpowers drug you can just rub onto your skin? </p><p>You'd think it would be something you'd have to freebase. <a href='#'>The alien mothership</a> is in orbit here. Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat. And from now on you're all named Bender Jr. Who said that? SURE you can die! You want to die?! I like cooking too.</p><img class='post-content-image pull-left' src='assets/img/tmp/product-3.jpg' alt'...'><h3>If we can hit that bullseye</h3><p>The rest of the dominoes will fall like a house of cards. Checkmate. Now that the, uh, garbage ball is in space, Doctor, perhaps you can help me with my inhibitions? I've been there. Just once <mark>I'd like to eat dinner with a celebrity</mark> who isn't stupid. What am I, the pope? Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. This opera's as lousy as it is brilliant! Your lyrics lack subtlety. You can't just have your characters announce how they feel. That makes me feel angry!</p><p>For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored. Then throw her in the laundry room, which will hereafter be referred to as 'the brig'. Who said that? SURE you can die! You want to die?! I like cooking too. Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. Well, thanks to the Internet. I decline the title of Iron Cook and accept the lesser title of Zinc Saucier, which I just made up. Comes with double prize money.</p><blockquote>Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.<footer><cite>Albert Einstein</cite></footer></blockquote><p>Doctor, perhaps you can help me with my inhibitions? I've been there. My folks were always on me to groom myself and wear underpants. What am I, the pope? Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. This opera's as lousy as it is brilliant! Your lyrics lack subtlety. This is the worst kind of discrimination.</p><img class='post-content-image pull-right' src='assets/img/tmp/product-9.jpg' alt'...'><h3>Completely reasonable</h3><p>I didn't ask for a completely reasonable excuse! I asked you to get busy! Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat. Look, everyone wants to be like <a href='#'>Germany</a>.</p><p>Bender, quit destroying the universe! We're rescuing ya. Shut up and get to the point! I decline the title of Iron Cook and accept the lesser title of Zinc Saucier, which I just made up. Uhh… also, comes with double prize money. Daylight and everything.</p><h3>The universe and human stupidity</h3><p>Wow! A superpowers drug you can just rub onto your skin? You'd think it would be something you'd have to freebase. For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored. Then throw her in the laundry room, which will hereafter be referred to as 'the brig'. I suppose I could part with 'one' and still be feared</p> -->
        <p><?php echo $cust_complaint;?></p>
    </div><!-- /.post-content -->

    <div class="post-meta-tags clearfix">
        Complaint Status:
        
        <form method="post" action="submit_status.php">
            
            
                <h6>Status</h6>
                
                <?php
                    if ($complaint_status == 1){
                        ?>
                    <div class="form-group">
                        <div class="checkbox">
                            <input type="checkbox" id="yesterday" disabled="true" checked><label for="yesterday">Acknowledged</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="status" value="3" id="today"><label for="today">Forwarded</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="tomorrow" disabled="true"><label for="tomorrow">Responded</label>
                        </div>
                        <input name="complaint_status_id" value="<?php echo $complaint_id; ?>" type="hidden" class="form-control" required>
                    </div><!-- /.form-group -->

                    <button type="submit" class="btn btn-primary"> Submit</button>
                        
                        <?php
                    }else if($complaint_status == 2){
                        ?>
                        <div class="checkbox">
                            <input type="checkbox" id="yesterday" checked disabled="true"><label for="yesterday">Acknowledged</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="today" checked disabled="true"><label for="today">Forwarded</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="tomorrow" checked disabled="true"><label for="tomorrow">Responded</label>
                        </div>
                        <?php
                    }else if($complaint_status == 3){
                        ?>
                        <div class="checkbox">
                            <input type="checkbox" id="yesterday" checked disabled="true"><label for="yesterday">Acknowledged</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="today" checked disabled="true"><label for="today">Forwarded</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="tomorrow" disabled="true"><label for="tomorrow">Responded</label>
                        </div>
                        <?php
                    }else if($complaint_status == 4){
                        ?>
                        <div class="checkbox">
                            <input type="checkbox" id="yesterday" checked disabled="true"><label for="yesterday">Acknowledged</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="today" checked disabled="true"><label for="today">Forwarded</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="tomorrow" checked disabled="true"><label for="tomorrow">Responded</label>
                        </div>
                        <?php
                    }else{
                        ?>
                    <div class="form-group">
                        <div class="checkbox">
                            <input name="status" value="1"  id="yesterday" type="checkbox"><label for="yesterday">Acknowledged</label>
                        </div>
                        <div class="checkbox">
                            <input name="for" id="today" type="checkbox" disabled="true"><label for="today">Forwarded</label>
                        </div>
                        <div class="checkbox">
                            <input name="res" id="tomorrow" type="checkbox" disabled="true"><label for="tomorrow">Responded</label>
                        </div>
                        <input name="complaint_status_id" value="<?php echo $complaint_id; ?>" type="hidden" class="form-control" required>
                        
                    </div><!-- /.form-group -->

                        <button type="submit" class="btn btn-primary"> Submit</button>
                        <?php
                    
                        
                    }
                ?>

                    
                </form>
    </div><!-- /.post-meta -->

    <?php
    
    if($complaint_status == 2){
        
        ?>
        
        <h2 id="reviews">Response</h2>

        <div class="comments">
        
            <div class="comment">
                <div class="comment-image">
                    <img src="assets/img/tmp/agent-5.jpg" alt="">
                </div><!-- /.comment-image -->
        
                <div class="comment-inner">
                    <div class="comment-header">
                        <h2><?php echo $responder; ?></h2>
                        <span class="separator">&#8226;</span>
                        <span class="comment-date"><?php echo $date_responded; ?></span>
                        <div class="comment-reply">
                            <a href="#"><i class="fa fa-reply"></i> Reply</a>
                        </div><!-- /.comment-reply -->
                    </div><!-- /.comment-header -->
        
                    <div class="comment-content-wrapper">
                        <div class="comment-content">
                            <p><?php echo $response; ?></p>
                        </div><!-- /.comment-content -->
                    </div><!-- /.comment-content-wrapper -->
                </div><!-- /.comment-inner -->
            </div><!-- /.comment -->
            
        </div><!-- /.comments -->
    
        <?php
        
    }else if($complaint_status == 4){
        
        ?>
        
        <h2 id="reviews">Response</h2>

        <div class="comments">
        
            <div class="comment">
                <div class="comment-image">
                    <img src="assets/img/tmp/agent-5.jpg" alt="">
                </div><!-- /.comment-image -->
        
                <div class="comment-inner">
                    <div class="comment-header">
                        <h2><?php echo $responder; ?></h2>
                        <span class="separator">&#8226;</span>
                        <span class="comment-date"><?php echo $date_responded; ?></span>
                        <div class="comment-reply">
                            <a href="#"><i class="fa fa-reply"></i> Reply</a>
                        </div><!-- /.comment-reply -->
                    </div><!-- /.comment-header -->
        
                    <div class="comment-content-wrapper">
                        <div class="comment-content">
                            <p><?php echo $response; ?></p>
                        </div><!-- /.comment-content -->
                    </div><!-- /.comment-content-wrapper -->
                </div><!-- /.comment-inner -->
            </div><!-- /.comment -->
            
        </div><!-- /.comments -->
    
        <?php
        
    }
    
    else{
        ?>
        <h2>Response Goes Here</h2>
        <form class="background-white p20 add-comment" method="post" action="submit_response.php">
    
            <p>Required fields are marked <span class="required">*</span></p>
    
            <div class="row">
    
                <div class="form-group col-sm-12">
                    <label for="">Response  <span class="required">*</span></label>
                    <textarea name="response" class="form-control" rows="5" required></textarea>
                </div><!-- /.col-sm-12 -->
                
                <div class="form-group col-sm-4">
                <label for="">Responder <span class="required">*</span></label>
                <input name="responder" type="text" class="form-control" required>
            </div><!-- /.col-sm-4 -->
            
                <input name="complaint_id" value="<?php echo $complaint_id; ?>" type="hidden" class="form-control" required>
                <input name="complaint_status" value="<?php echo $complaint_status; ?>" type="hidden" class="form-control" required>

                <div class="col-sm-4">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-comments"></i>Submit Response</button>
                </div><!-- /.col-sm-4 -->
    
            </div><!-- /.row -->
        </form>

    <?php
        
    }
    
    ?>
    
</div><!-- /.post -->


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
