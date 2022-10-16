<?php session_start();?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>

<?php
include './config.php';
include './gencode.php';
include './gencode_dynamic.php';
?>
<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VTB News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="css/my_style2.css">
        <link rel="stylesheet" href="css/style_index.css">
	<script src="js/my_js.js"></script>

	</head>
	<body>
            
                <div id="colorlib-page">
                        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                        <aside id="colorlib-aside" role="complementary" class="js-fullheight">
                                <h1 id="colorlib-logo"><a href="index.html"><img src="images/logo_first3.png" alt="Tech NewsLogo"></a></h1>
                                <nav id="colorlib-main-menu" role="navigation">
                                    <form method="get" action="indexgen.php">
                                        <ul>
                                                <li class="colorlib-active"><a href="#"><?php echo $indexcategory; ?></a></li>
                                        </ul>

                                        <ul class="navigation">
                                                <a class="main" href="#url">Выберите направление</a>
                                                <li class="n1">
                                                    <input name="sub1" type="submit" value="Финансы"/>
                                                </li>
                                                <li class="n2"><input class="main" name="sub2" type="submit" value="Политика"/></li>                                                
                                                <li class="n4"><input class="main" name="sub4" type="submit" value="Бизнес"/></li>
                                                
                                          </ul>

                                    </form>
                                </nav>


                                <div class="colorlib-footer">
                                        <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        LoLTeX &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by LoLTeX</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> 
        <!-- <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash.com</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels.com</a></span></small></p> -->
        <!--				<ul>
                                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                        </ul>-->
                                </div>

                        </aside>
                    <?php if(isset($_REQUEST['sub1']) or isset($_REQUEST['sub2']) or isset($_REQUEST['sub3']) or isset($_REQUEST['sub3']) or isset($_REQUEST['sub4'])){?>    
                        <div id="colorlib-main">
                                <div class="colorlib-blog">
                                        <div class="container-wrap">
                                            <form method="get" action="indexgen.php">
                                                <div class="row">
                                                        <div class="col-md-5">
                                                                <div class="blog-entry animate-box">
                                                                        <div class="blog-img" style="background-image: url(<?php echo $stackimage[0]?>);">
                                                                                <div class="desc text-center">

                                                                                        <h2 class="head-article"><a href="<?php echo $stacklink[0]; ?>"><?php echo $stacktitle[0]; ?></a></h2>
                                                                                        
                                                                                   
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                                <div class="row">
                                                                        <div class="col-md-12">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stackimage[1]?>);">
                                                                                                <div class="desc text-center">
<!--                                                                                                        <p class="tag"><span>Place</span></p>-->
                                                                                                        <h2 class="head-article"><a href="<?php echo $stacklink[1]; ?>"><?php echo $stacktitle[1]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stackimage[2]?>);">
                                                                                                <div class="desc text-center">
<!--                                                                                                        <p class="tag"><span>Place</span></p>-->
                                                                                                        <h2 class="head-article"><a href="<?php echo $stacklink[2]; ?>"><?php echo $stacktitle[2]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[0]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[0]; ?>"><?php echo $stack_dynamic_title[0]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[1]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[1]; ?>"><?php echo $stack_dynamic_title[1]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[2]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[2]; ?>"><?php echo $stack_dynamic_title[2]; ?></a></h2>
                                                                                                        >
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[3]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[3]; ?>"><?php echo $stack_dynamic_title[3]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[4]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[4]; ?>"><?php echo $stack_dynamic_title[4]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[5]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[5]; ?>"><?php echo $stack_dynamic_title[5]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[6]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[6]; ?>"><?php echo $stack_dynamic_title[6]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" style="background-image: url(<?php echo $stack_dynamic_image[7]; ?>);">
                                                                                                <div class="desc text-center">
                                                                                                        
                                                                                                        <h2 class="head-article"><a href="<?php echo $stack_dynamic_link[7]; ?>"><?php echo $stack_dynamic_title[7]; ?></a></h2>
                                                                                                        
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>

                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                            
                                </div>			
                        </div>
                    <?php } 
                    else{?> 
                        <div id="colorlib-main">
                                <div class="colorlib-blog">
                                        <div class="container-wrap">
                                            <form name="acc_btn" method="get" action="indexacc.php">
                                                <div class="row">
                                                        <div class="col-md-5">
                                                                <div class="blog-entry animate-box">
                                                                        <div class="blog-img">
                                                                                <div class="desc text-center">
                                                                                   
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                                <div class="row">
                                                                        <div class="col-md-12">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2" >
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="blog-entry animate-box">
                                                                                        <div class="blog-img blog-img2">
                                                                                                <div class="desc text-center">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            
                                                        </div>

                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                            
                                </div>			
                        </div>
                    <?php } ?>    
                </div>
</form>
                <!-- jQuery -->
                <script src="js/jquery.min.js"></script>
                <!-- jQuery Easing -->
                <script src="js/jquery.easing.1.3.js"></script>
                <!-- Bootstrap -->
                <script src="js/bootstrap.min.js"></script>
                <!-- Waypoints -->
                <script src="js/jquery.waypoints.min.js"></script>
                <!-- Flexslider -->
                <script src="js/jquery.flexslider-min.js"></script>
                <!-- Magnific Popup -->
                <script src="js/jquery.magnific-popup.min.js"></script>
                <script src="js/magnific-popup-options.js"></script>
                <!-- Owl Carousel -->
                <script src="js/owl.carousel.min.js"></script>
                <!-- Sticky Kit -->
                <script src="js/sticky-kit.min.js"></script>


                <!-- MAIN JS -->
                <script src="js/main.js"></script>
        


	</body>
</html>

