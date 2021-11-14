<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Local Voice - Home</title>
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

       

        <section class="section lb" style="margin-top: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build">

                                <?php
                                include("includes/config.php");

                                $sq = mysqli_query($conn, "SELECT * FROM `blogs` WHERE `status` = '1'");
                                while($rww = mysqli_fetch_array($sq)){
                                ?>

                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="marketing-single.html" title="">
                                            <img src="upload/<?php echo $rww['image']?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <!-- <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div> --><!-- end post-sharing -->
                                        <h4><a href="single.php?bl=<?php echo $rww['bid']?>" title=""><?php echo $rww['title'];?></a></h4>
                                        <p style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 60ch;"><?php echo base64_decode($rww['description']);?></p>
                                        <!-- <small><a href="marketing-category.html" title="">Make Money</a></small> -->
                                        <small><a href="marketing-single.html" title=""><?php echo $rww['created_at']?></a></small>
                                        <small><a href="#" title="">by <?php echo $rww['author']?></a></small>
                                        <!-- <small><a href="#" title=""><i class="fa fa-eye"></i> 2291</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                <?php 
                            }
                                ?>
                                <!-- end blog-box -->
                            </div>
                        </div>

                        <hr class="invis">

                        
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
                                        <a href="single.php?bl=<?php echo $rrec['bid']?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                
                                                <h5 class="mb-1"><?php echo $rrec['title'];?></h5>
                                                <small style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;"><?php echo base64_decode($rrec['description']);?></small>
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