
<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "project");

$query = "select * from registration WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
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
</head>
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

            <table class="table table-striped">

                <tr>
                    <th>Field Name</th>
                    <td>Description</td>
                </tr>

                <?php
                foreach($result as $row) {
                    ?>

                    <tr>
                        <th>First Name</th>
                        <td><?php echo $row['first_name'] ?></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><?php echo $row['last_name'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><?php echo $row['password'] ?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td><?php echo $row['gender'] ?></td>
                    </tr>
                    <tr>
                        <th>Birthday</th>
                        <td><?php echo $row['bday'] ?></td>
                    </tr>
                    <tr>
                        <td>Hobby</td>
                        <td><?php echo $row['hobby'] ?></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><?php echo $row['city'] ?></td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td><?php echo $row['comment'] ?></td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?php echo $row['created'] ?></td>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?php echo $row['modified'] ?></td>
                    </tr>

                <?php
                }

                ?>

            </table>


        </div>
    </div>



</section>
<div>
<!--    <a href="list.php">Go to List</a>-->
    <a href="dummy.php" class="btn btn-primary btn-lg active" role="button">Go To List</a>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


