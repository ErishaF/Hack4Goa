<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>DoubleDocks - Blog Details</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="css/version/marketing.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <?php include("includes/nav.php");?>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section lb m3rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                

                                <?php 
                                include("includes/config.php");
                                $bd = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `blogs` where `bid`='".$_GET['bl']."'"));
                                ?>

                                <h3><?php echo $bd['title'];?></h3>

                                <div class="blog-meta big-meta">
                                    <small><a ><?php echo $bd['created_at'];?></a></small>
                                    <small><a>by <?php echo $bd['author']?></a></small>
                                    
                                </div><!-- end meta -->

                                
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="upload/<?php echo $bd['image'];?>" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p><?php echo base64_decode($bd['description']);?></p>

                                    

                                </div><!-- end pp -->

                              
                            </div><!-- end content -->

                   
                            <hr class="invis1">

                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">

                                        <?php
                                         $rec = mysqli_query($conn, "SELECT * FROM `blogs` WHERE `status` = '1' ORDER BY `id` DESC LIMIT 5");

                                    while($rrec = mysqli_fetch_array($rec)){
                                        ?>
                                        <a href="single.php?bl=<?php echo $rrec['bid'];?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                
                                                <h5 class="mb-1"><?php echo $rrec['title'];?></h5>
                                                <small style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;"><?php echo base64_decode($rrec['description']);?></small>
                                            </div>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                       
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                           
                         

                         
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

      <?php include("includes/footer.php");?>

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>