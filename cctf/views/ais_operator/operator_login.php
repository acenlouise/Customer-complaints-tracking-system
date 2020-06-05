<?php

    include_once("../common/head.php");

?>

    <title>Customer Complaints</title>
</head>


<body class="">

<div class="page-wrapper">
    
    <?php
        //include_once("../common/customer_header.php");
    ?>




    <div class="main">
        <div class="outer-admin">
            <div class="wrapper-admin">
                
                <?php
                    //include_once("../common/customer_mainsidebar.php");
                    
                    //include_once("../common/customer_minisidebar.php");
                ?>

                <div class="content-admin">
                    <div class="content-admin-wrapper">
                        <div class="content-admin-main">
                            <div class="content-admin-main-inner">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
    <div class="page-title">
        <h1>Customer Complaints</h1>
    </div><!-- /.page-title -->

    <div class="row">
        
        <div class="col-md-8">
            
            <div class="background-white p20 mb50">
                <h2 class="page-title">Operator Login Form</h2>
                <form action= "login_script.php" method= "post" style="width:35%;">
    			    <table>
    			        <tr>
    			            <div class="form=group">
        			             <label> username: </label>
                				 <input type="text" name="name" style="padding:5px; border-radius:6px;s height: 40px; margin-bottom: 10px;background:#6c7ae0; color:#FFFFFF" required/>
                            </div>
                        
                            <div>
                                 <label> password: </label>
                				 <input type="text" name="password" style="padding:5px; border-radius:6px;s height: 40px; margin-bottom: 10px;background:#6c7ae0; color:#FFFFFF" required/>
                            </div>
                            
                            <div class="form=group">
                   			    <input type="submit" value="Login" style="padding:5px; border-radius:6px;s height: 40px; margin-bottom: 10px;background:#6c7ae0; color:#FFFFFF">
                            </div>
                        </tr>
                    </table>
    			</form>
    			
    			<?php
                
                    $loginfail = $_GET['loginfail'];
                    
                    if($loginfail == 1){
                        
                        ?>
    			<div class="alert alert-icon alert-dismissible alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <strong>Attention!</strong> Incorrect username or password.
                </div>
                
                <?php
                        
                    }
                ?>
                
            </div>
        </div>
        
      
    </div>

  
</div><!-- /.col-* -->

                                    </div>
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-main-inner -->
                        </div><!-- /.content-admin-main -->
                        
                        <?php
                            include_once("../common/customer_footer.php");
                        ?>
                        
                        
                    </div><!-- /.content-admin-wrapper -->
                </div><!-- /.content-admin -->
            </div><!-- /.wrapper-admin -->
        </div><!-- /.outer-admin -->
    </div><!-- /.main -->
</div><!-- /.page-wrapper -->

<?php
        include_once("../common/bottom.php");
?>

</body>
</html>
