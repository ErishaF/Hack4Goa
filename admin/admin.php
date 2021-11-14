<?php
session_start();
include("includes/config.php");
if (!isset($_SESSION['username']) && $_SESSION['userid'] != true) {
    
    echo "<script>
    window.location = 'index.php';
</script>";

} 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Double Docks</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include("includes/topnav.php");?>
        <!-- End Top Navigation -->
        <?php include("includes/sidenav.php");?>
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Admin</h4> 

                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
            	<div class="row">
            		<div class="col-md-12 col-lg-12 col-sm-12">
            			<div class="white-box">
                            <h4>Add New Admin</h4>
            				<form class="form-horizontal" method="POST" action="includes/add-admin.php" enctype="multipart/form-data">
            					<label>Username:</label>
            					<input class="form-control row b-none" type="text" name="uname" style="width: 500px; " placeholder="Enter Username..">

            					<label>Password:</label>
            					<input class="form-control row b-none" type="password" name="pass" style="width: 500px; " placeholder="Enter Password..">

            					

            					
            					<br>
            					<input type="submit" name="submit" class="btn btn-lg btn-info" value="ADD ADMIN">

            				</form>
            			</div>
            		</div>
            	</div>


                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h4>Change Password of Current Admin Account</h4>
                            <form class="form-horizontal" method="POST" action="includes/change-pass.php" enctype="multipart/form-data">
                                <input type="hidden" name="uid" value="<?php echo $_SESSION['userid'];?>">
                                <label>New Password:</label>
                                <input class="form-control row b-none" type="password" name="npass" style="width: 500px; " placeholder="Enter Username..">
                                
                                <br>
                                <input type="submit" name="submit" class="btn btn-lg btn-warning" value="CHANGE PASSWORD">

                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            
                            <h3 class="box-title">Admins</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Created At</th>
                                            
                                            <th>Status</th>
                                            <th>Action<th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php  

                                    	$bl = mysqli_query($conn, "SELECT * FROM `admin`");

                                    	$i = 1;

                                    	while($rw = mysqli_fetch_array($bl)){
                                    	?>

                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td class="txt-oflo"><?php echo $rw['username'];?></td>
                                            <td><?php echo $rw['created_at']?></td>
                                            
                                            <td>

                                            	<?php
                                            	
                                            	if($rw['status'] == 1){
                                            		echo "<span class='text-success'>Active</span>";
                                            	}else{

                                            		echo "<span class='text-danger'>Inactive</span>";
                                            	}
                                            	?>
                                            	
                                            </td>

                                            <td>
                                            	<?php
                                            	if($rw['status'] == 1){

                                            		?>
                                            		<a href="includes/endis.php?id=<?php echo $rw['uid']?>&type=admin&do=0"><input class="btn btn-sm btn-warning" type="button" name="disable" value="Disable"></a>
                                            		<?php
                                            	}else{
                                            		?>

                                            		<a href="includes/endis.php?id=<?php echo $rw['uid']?>&type=admin&do=1"><input class="btn btn-sm btn-success" type="button" name="enable" value="Enable"></a>
                                            		<?php
                                            	}
                                            	?>
                                            	
                                            	
                                            </td>
                                        </tr>

                                        <?php
                                        $i++;
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
            <!-- /.container-fluid -->
           <?php include("includes/footer.php");?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
