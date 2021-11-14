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
                        <h4 class="page-title">Issues raised</h4> 

                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
            	<div class="row">
            		<div class="col-md-12 col-lg-12 col-sm-12">
            			<div class="white-box">
            				<form class="form-horizontal" method="POST" action="includes/add-blog.php" enctype="multipart/form-data">
            					<label>Subject:</label>
            					<input class="form-control row b-none" type="text" name="title" style="width: 500px; " placeholder="Enter Subject..">

            					<label>Description:</label>
            					<textarea class="form-control row b-none" rows="8" name="desc" style="width: 500px; " placeholder="Enter Description.."></textarea>

            					<label>Image:</label>
            					<input class="form-control" type="file" name="images" style="width: 500px; ">

            					<label>Query handled by:</label>
            					<input class="form-control row b-none" type="text" name="author" style="width: 500px; " placeholder="Enter Name..">
            					<br>
            					<input type="submit" name="submit" class="btn btn-lg btn-info" value="POST ISSUE">

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
                            
                            <h3 class="box-title">Issues Raised</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action<th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php  

                                    	$bl = mysqli_query($conn, "SELECT * FROM `blogs`");

                                    	$i = 1;

                                    	while($rw = mysqli_fetch_array($bl)){
                                    	?>

                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td class="txt-oflo"><span style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;"><?php echo $rw['title'];?></span></td>
                                            <td><span style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 13ch;"><?php echo base64_decode($rw['description'])?></span></td>
                                            <td class="txt-oflo"><img src="../upload/<?php echo $rw['image']?>" style="width: 100px; height: 100px;"></td>
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
                                            		<a href="includes/endis.php?id=<?php echo $rw['bid']?>&type=blog&do=0"><input class="btn btn-sm btn-warning" type="button" name="disable" value="Disable"></a>
                                            		<?php
                                            	}else{
                                            		?>

                                            		<a href="includes/endis.php?id=<?php echo $rw['bid']?>&type=blog&do=1"><input class="btn btn-sm btn-success" type="button" name="enable" value="Enable"></a>
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
