


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

            <table .table-bordered class="table table-striped">
                <tr class="info">
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

                    <tr class="info">
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
    </div>



</section>
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


