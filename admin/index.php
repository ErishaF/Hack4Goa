<?php
session_start();
include("includes/config.php");
if (isset($_SESSION['username']) && $_SESSION['userid'] = true) {
    
    echo "<script>
    window.location = 'dashboard.php';
</script>";

} 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/images/logos/ample-favicon.png">
    <title>Double Docks - Admin</title>
    <!-- Custom CSS -->
    <link href="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/dist/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Main wrapper -->
<!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->
        <header class="py-3 bg-white">
            <div class="container">
                <!-- Start Header -->
                <div class="header">
                    <nav class="navbar navbar-expand-md navbar-light px-0">
                        <a class="navbar-brand" href="#">
                            <span style="color: #000; font-size: 24px; font-family: Algerian;"><b>LOCAL VO!CE</b></span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                    </nav>
                </div>
                <!-- End Header -->
            </div>
        </header>
        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Page wrapper part -->
        <!-- ============================================================== -->
        <div class="content-wrapper">
            <!-- ============================================================== -->
            <!-- Demos part -->
            <!-- ============================================================== -->
            <section class="spacer bg-light">
                <div class="container">
                    <div class="row justify-content-md-center pt-5" style="margin-top: -80px;">
                        <div class="col-md-9 text-center">
                            <h2 class="text-dark"><u>LOGIN</u></h2>
                        </div>
                    </div>
                    <div class="row py-5">
                        <!-- ============================================================== -->
                        <!-- Lite Demo -->
                        <!-- ============================================================== -->
                        <div class="col-md-12">
                            <div class="card p-2 mr-1">
                                <div class="card-body p-4">
                                    <form class="form-horizontal" method="POST" action="includes/login.php">
                                    <div class="live-box text-center mt-4">
                                        <label>Username: <input type="text" name="uname" placeholder="Enter Username" class="form-control" style="width: 300px;"></label>
                                        <br>
                                        <label>Password: <input type="password" name="pass" placeholder="Enter Password" class="form-control" style="width: 300px;"></label>

                                    </div>
                                    
                                   
                                    <div class="text-center mt-4 mb-3">
                                        <button type="submit" name="submit" class="btn btn-custom btn-outline-info btn-lg" >LOGIN</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Pro Demo -->
                        <!-- ============================================================== -->
                        
                    </div>
                </div>
            </section>
        </div>
        <!-- ============================================================== -->
        <!-- End page wrapperHeader part -->
        <!-- ============================================================== -->
        <?php include("includes/footer.php")?>
    </div>
</body>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

</html>