

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/bootstrap3.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<!-- Header -->
<header id="header">

<?php

include_once('header.php');

?>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container"id="top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <a class="navbar-brand" href="#">Control Panel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="list.php">My Profile</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">

<!-- upper section -->
<div class="row">
    <div class="col-sm-1">
        <!-- left -->
        <h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
        <hr>

        <ul class="nav nav-stacked">
            <li><a href="list.php"><i class="glyphicon glyphicon-user"></i> Users</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-link"></i> Links</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-book"></i> Books</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
        </ul>

        <hr>Alerts

    </div><!-- /span-3 -->

    <div class="col-sm-11">


        <h3><center>User's List</center></h3>

        <?php

        $link = mysqli_connect("localhost",
            "root",
            "lict@2",
            "project");

        $query = "select * from registration;";

        $result = mysqli_query($link, $query);

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>About Me | Corlate</title>
            <!-- core CSS -->
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
            <![endif]-->
            <link rel="shortcut icon" href="images/ico/favicon.ico">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
            <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        </head><!--/head-->
        <!--<!DOCTYPE html>-->
        <!--<html xmlns="http://www.w3.org/1999/html">-->
        <!--<head lang="en">-->
        <!--    <meta charset="UTF-8">-->
        <!--    <title></title>-->
        <!--    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">-->
        <!--</head>-->
        <body >
        <section class="container">
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Hobby</th>
                        <th>City</th>
                        <th>Comment</th>
                        <th>Created</th>
                        <th>Modified</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach($result as $row){
                        ?>

                        <tr>
                            <td ><?php echo $row['id']?></td>
                            <td class="success"><?php echo $row['first_name']?></td>
                            <td class="success"><?php echo $row['last_name']?></td>
                            <td class="success"><?php echo $row['email']?></td>
                            <td class="success"><?php echo $row['password']?></td>
                            <td class="success"><?php echo $row['gender']?></td>
                            <td class="success"><?php echo $row['bday']?></td>
                            <td class="success"><?php echo $row['hobby']?></td>
                            <td class="success"><?php echo $row['city']?></td>
                            <td class="success"><?php echo $row['comment']?></td>
                            <td ><?php echo $row['created']?></td>
                            <td ><?php echo $row['modified']?></td>

                            <td> <a href="view.php?id=<?php echo $row['id']?>">View &nbsp;<span class="glyphicon glyphicon-search"></span></a> |<a href="update.php?id=<?php echo $row['id']?>">Edit &nbsp;<span class="glyphicon glyphicon-pencil"></span></a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete &nbsp;<span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>

                    <?php
                    }
                    ?>

                    </table>

                </div>

</div><!--/row-->




        </div>
    </div>



</section>
    <div class="container">
        <div class="row">
            <div class="col-md-10">

            </div>
            <div class="col-md-2">
                <a href="#top">TOP &nbsp;</a><span class="glyphicon glyphicon-chevron-up"></span>
            </div>
        </div>
    </div>

    <div>
    <!--    <a href="dashboard.php">Go to Dashboard</a>-->
    <a href="dashboard.php" class="btn btn-primary btn-lg active" role="button">Go to Dashboard</a>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->

</body>
</html>



<!-- /upper section -->

<!-- lower section -->
<div class="row">

    <div class="col-md-12">
        <hr>
        <a href="dashboard1.php"><strong><i class="glyphicon glyphicon-list-alt"></i> Reports</strong></a>
        <hr>
    </div>
    <div class="col-md-8">

        <table class="table table-striped">
            <thead>
            <tr><th>Visits</th><th>ROI</th><th>Source</th><th>Description and Notes</th></tr>
            </thead>
            <tbody>
            <tr><td>45</td><td>2.45%</td><td>Direct</td><td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor.
                    Aliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
            <tr><td>289</td><td>56.2%</td><td>Referral</td><td>After RWD massa, aliquam in cursus ut, ullamcorper in tortor.
                    Aliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
            <tr><td>98</td><td>25%</td><td>Type</td><td>Wil sapien massa, aliquam in cursus ut, ullamcorper in tortor.
                    Liquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
            <tr><td>109</td><td>8%</td><td>..</td><td>Forfoot aliquam in cursus ut, ullamcorper in tortor.
                    Okma mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
            <tr><td>34</td><td>14%</td><td>..</td><td>Mikel sapien massa, aliquam in cursus ut, ullamcorper in tortor.
                    Maliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
            </tbody>
        </table>

        <hr>

        <!--tabs-->
        <div class="container">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>

            </ul>

            <!--            <div class="tab-content">-->
            <!--                <div class="recent-work-inner">-->
            <!--                    <a href="dashboard1.php" class="btn btn-primary btn-lg active" role="button">SETTING</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                            <i class="glyphicon glyphicon"></i>SETTING<span class="caret"></span></a>
                        <ul id="g-account-menu" class="dropdown-menu" role="menu">
                            <li><a href="list.php">List</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <div class="tab-pane active" id="profile">
                <h4><i class="glyphicon glyphicon-user"></i></h4>
                Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                    Aliquam in felis sit amet augue.</p>
            </div>
            <div class="tab-pane" id="messages">
                <h4><i class="glyphicon glyphicon-comment"></i></h4>
                Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                    Aliquam in felis sit amet augue.</p>
            </div>
            <div class="tab-pane" id="settings">
                <h4><i class="glyphicon glyphicon-cog"></i></h4>
                Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                    Aliquam in felis sit amet augue.</p>
            </div>
        </div>
    </div>
    <!--/tabs-->

    <hr>

   <hr>

    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please remember to <a href="#">Logout</a> for classified security.
    </div>


</div>
<div class="col-md-4">

    <ul class="nav nav-pills nav-stacked">
        <li class="nav-header"></li>
        <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
    </ul>

    <hr>

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="glyphicon glyphicon-wrench pull-right"></i>
                <h4>Submit Request</h4>
            </div>
        </div>
        <div class="panel-body">

            <form class="form form-vertical">
                <div class="control-group">
                    <label>Name</label>
                    <div class="controls">
                        <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                </div>
                <div class="control-group">
                    <label>Title</label>
                    <div class="controls">
                        <input type="password" class="form-control" placeholder="Password">

                    </div>
                </div>
                <div class="control-group">
                    <label>Details</label>
                    <div class="controls">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label>Select</label>
                    <div class="controls">
                        <select class="form-control"><option>General Question</option><option>Server Issues</option><option>Billing Question</option></select>
                    </div>
                </div>
                <div class="control-group">
                    <label></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">
                            Post
                        </button>
                    </div>
                </div>

            </form>


        </div><!--/panel content-->
    </div><!--/panel-->

    <div class="panel panel-default">
        <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
        <div class="panel-body">
            <div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
            <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
            <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
        </div>
    </div><!--/panel-->

</div><!--/col-->

</div><!--/row-->

</div><!--/container-->
<!-- /Main -->


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


