<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio | Corlate</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<header id="header">
<?php

include_once('header.php');

?>

</header><!--/header-->
<section id="portfolio">
    <div class="container"id="top">
        <div class="center">
            <h2>Portfolio</h2>
            <p class="lead"> <br>I am Bangladeshi And My Cultural Is It</p>
        </div>


        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
        </ul><!--/#portfolio-filter-->

        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/bagh.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="bagh.php">National Animal</a></h3>
                                <p>Royal Bengal tiger </p>
                                <a class="preview" href="images/bagh.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


            <div class="col-md-4">
                    <div class="recent-work-wrap">
                        <img src="images/traditional.jpeg" height="225px" width="190px">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="pitha.php">Traditional Food</a></h3>
                                <p>There are many tasty Pitha and varieties of taste</p>
                                <a class="preview" href="images/traditional.jpeg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


                <div class="col-md-4">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/sahid.jpeg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="sahid.php">Shaheed Minar, Dhaka</a></h3>
                                <p>International Mother Language</p>
                                <a class="preview" href="images/sahid.jpeg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/nach.jpeg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="nach.php">Bangal Cull Acher</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/nach.jpeg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="col-md-4">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/gorur gari.jpeg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="">Bullock cart</a></h3>
                                <p>Bangladesh Famous Bullock cart </p>
                                <a class="preview" href="images/gorur gari.jpeg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="col-md-4">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/sky.jpeg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="ruposhi.php">Ruposhi Bangla</a></h3>
                                <p>Nature Of Beauty</p>
                                <a class="preview" href="images/sky.jpeg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


            </div>
        </div>
   </div>
</section>
<div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
            <li data-target="#carousel-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/chip.jpg"  height="300px" width="1000px" alt="">
            </div>
            <div class="item">
                <img src="images/Village nature02.jpg" class="img-responsive" height="300px" width="1000px"alt="">
            </div>
            <div class="item">
                <img src="images/dan.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
                <img src="images/nature1.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
                <img src="images/butter.jpg" class="img-responsive" alt="">
            </div>
        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div> <!--/#carousel-slider-->
</div><!--/#about-slider-->
<div class="container">
    <div class="row">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <a href="#top">TOP &nbsp;</a><span class="glyphicon glyphicon-chevron-up"></span>
        </div>
    </div>
</div>


<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2015 Umme kulsum Sarker
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_me.php">About Us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>


