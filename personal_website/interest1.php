<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | Corlate</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<?php
include_once('header.php');
?>
<!--!--/header-->--
</br>

<section id="blog" class="container">
<div class="center">
    <h2>Introduce Myself</h2>
    <p class="lead">I wanted a perfect ending.I am Umme Kulsum </br>I complete my BSc. in Computer Science and Engineering
    </p>
</div>

<div class="blog">
<div class="row">
<div class="col-md-8">
    <div class="blog-item">
        <img class="img-responsive img-blog" src="images/jerin.jpg" width="100%" alt="" />
        <div class="row">
            <div class="col-xs-12 col-sm-2 text-center">
                <div class="entry-meta">
                    <span id="publish_date">07  NOV</span>
                    <span><i class="fa fa-user"></i> <a href="#"> Jerin</a></span>
                    <span><i class="fa fa-comment"></i> <a href="sign_in.php">2 Comments</a></span>
                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-10 blog-content">
                <h2> Fifteen Seconds...</h2>
                <p>
                    I'm closing my eyes and leaving this earth forever,
                    Heading for Neptune because it has the longest year.
                    I'm having that fifteen seconds which i never had,
                    I'm having that sweet moments which i never get;</p>

                <p> I'm playing with his hair and kissing on his neck,
                    That killer smile and i'm sitting on my deck.
                    His continuous anger and tremendous ignorance,
                    Making me more childish and incresing my brazenness.</p>

                <p> I'm flying like sandgrouses.
                    My soul feels like a sanctum;
                    His voice is sweeter than any sweet,
                    His eyes are counting my heart beat;
                    His blue shirt is bluer than Neptune,
                    I'm becoming the goddess of fortune.</p>

                <p>I'm having that fifteen seconds again and again which i never had,
                    I'm having that sweet moments again and again which i never get;
                    I'm using all my imagination power to make it realer than reality,
                    By the power of those unforgettable memory i'm overcoming difficulty.</p>
                <div class="post-tags">
                    <strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
                </div>

            </div>
        </div>
    </div><!--/.blog-item-->

    <div class="media reply_section">
        <div class="pull-left post_reply text-center">
            <a href="#"><img src="images/faria.JPG" class="img-circle" alt="" /></a>

        </div>
        <div class="media-body post_reply_content">
            <h3>Fariha. My Sister</h3>
            <p class="lead">She is a prety Girl</p>

        </div>
    </div>

    <h1 id="comments_title">5 Comments</h1>
    <div class="media comment_section">
        <div class="pull-left post_comments">
            <a href="#"><img src="images/nipa.jpg" class="img-circle" alt="" /></a>
        </div>
        <div class="media-body post_reply_comments">
            <h3>Tumpa</h3>
            <h4>NOVEMBER 9, 2015 AT 9:15 PM</h4>
            <p>I like it</p>
            <a href="#">Reply</a>
        </div>
    </div>
    <div class="media comment_section">
        <div class="pull-left post_comments">
            <a href="#"><img src="images/apu.JPG" class="img-circle" alt="" /></a>
        </div>
        <div class="media-body post_reply_comments">
            <h3>Tumpa</h3>
            <h4>NOVEMBER 9, 2015 AT 9:15 PM</h4>
            <p>I like it</p>
            <a href="#">Reply</a>

        </div>
    </div>
    <div class="media comment_section">
        <div class="pull-left post_comments">
            <a href="#"><img src="images/sin.JPG" class="img-circle" alt="" /></a>
        </div>
        <div class="media-body post_reply_comments">
            <h3>Tumpa</h3>
            <h4>NOVEMBER 9, 2015 AT 9:15 PM</h4>
            <p>Interesting</p>
            <a href="#">Reply</a>
        </div>
    </div>


    <div id="contact-page clearfix">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="message_heading">
            <h4>Leave a Replay</h4>
            <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
        </div>

        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="url" class="form-control">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                    </div>
                </div>
            </div>
        </form>
    </div><!--/#contact-page-->
</div><!--/.col-md-8-->

<aside class="col-md-4">

    <div class="widget categories">
        <h3>Recent Comments</h3>
        <div class="row">
            <div class="col-sm-12">
                <div class="single_comments">
                    <img src="images/blog/avatar3.png" alt=""  />
                    <p>Woohaooo, consectetur adipisicing elit, sed do </p>
                    <div class="entry-meta small muted">
                        <span>By <a href="#">Tumpa</a></span <span>On <a href="#">Creative</a></span>
                    </div>
                </div>
                <div class="single_comments">
                    <img src="images/blog/avatar3.png" alt=""  />
                    <p>, sed do </p>
                    <div class="entry-meta small muted">
                        <span>By <a href="#">Tumpa</a></span <span>On <a href="#">Creative</a></span>
                    </div>
                </div>
                <div class="single_comments">
                    <img src="images/blog/avatar3.png" alt=""  />
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <div class="entry-meta small muted">
                        <span>By <a href="#">Tumpa</a></span <span>On <a href="#">Creative</a></span>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/.recent comments-->


    <div class="widget categories">
        <h3>Categories</h3>
        <div class="row">
            <div class="col-sm-6">
                <ul class="blog_category">

                    <li><a href="piano.php">Kobiter Kotha <span class="badge">10</span></a></li>
                    <li><a href="portfolio.php">Video Editing <span class="badge">06</span></a></li>
                    <li><a href="champa.php">Painting <span class="badge">25</span></a></li>
                </ul>
            </div>
        </div>
    </div><!--/.categories-->

    <div class="widget archieve">
        <h3>Archieve</h3>
        <div class="row">
            <div class="col-sm-12">
                <ul class="blog_archieve">

                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2015 <span class="pull-right">(32)</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2015 <span class="pull-right">(19)</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2015 <span class="pull-right">(08)</a></li>
                </ul>
            </div>
        </div>
    </div><!--/.archieve-->


    <div class="widget blog_gallery">
        <h3>My Gallery</h3>
        <ul class="sidebar-gallery">
            <li><a href="#"><img src="images/doll.png" alt="" /></a></li>
            <li><a href="#"><img src="images/draw.jpg" alt="" /></a></li>
            <li><a href="#"><img src="images/girl.png" alt="" /></a></li>
            <li><a href="#"><img src="images/hand.png" alt="" /></a></li>
            <li><a href="#"><img src="images/coin.jpeg" alt="" /></a></li>
            <li><a href="#"><img src="images/angry.jpeg" alt="" /></a></li>
        </ul>
    </div><!--/.blog_gallery-->


</aside>

</div><!--/.row-->

</div><!--/.blog-->

</section><!--/#blog-->
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
                <li><a href="#">About Us</a></li>
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


