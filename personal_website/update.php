

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
<body>
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

<h1>  Add Reference </h1>

<form action="edit.php" method="post">

    <br/>

    <div>
        <input type="hidden" name="id" value=<?php echo $row['id']; ?> />
    </div>
    <div class= "form-inline">
        <label>First Name *</label>
        <input type="text" name="first_name" value=<?php echo $row['first_name']; ?> />
    </div>
    <br />
    <div class= "form-inline">
        <label>Last Name *</label>
        <input type="text" name="last_name" value=<?php echo $row['last_name']; ?> />
    </div>
    <br />
    <div>
        <label class= "form-inline">  Email </label>
        <input type="text" name="email" value=<?php echo $row['email']; ?> />
    </div>
    <br />
    <div class="form-inline">
        <label> Password</label>
        <input type="text" name="password" value=<?php echo $row['password']; ?> />
    </div>
    <br />
    <div class="form-inline">
        <label  class="col-sm-2 control-label">Gender</label><span style="color: red">*</span>
        <div class="col-sm-10">
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio3" value="Others"> Others
            </label>
        </div>
    </div>
    <br/>
    <div class="form-inline">
        <label  class="col-sm-2 control-label">Date of Birth</label><span style="color: red">*</span>
        <div class="col-sm-10">
            <select name="b_year" class="form-control" required="required">
                <option value="">---Select year---</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1999">1994</option>
                <option value="1998">1993</option>
                <option value="1997">1992</option>
                <option value="1996">1991</option>
                <option value="1995">1990</option>
            </select>

            <select name="b_month" class="form-control" required="required">
                <option value="">---Select Month---</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>

            <select name="b_day" class="form-control" required="required">
                <option value="">---Select Day---</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    </br>
    <div class="form-inline">
        <label  class="col-sm-2 control-label">Hobby</label>
        <div class="col-sm-10">
            <label class="checkbox-inline">
                <input type="checkbox" name="hobby[]" id="inlineCheckbox1" value="Gardening"> Gardening
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="hobby[]" id="inlineCheckbox2" value="Travelling"> Travelling
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="hobby[]" id="inlineCheckbox3" value="Painting"> Painting
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="hobby[]" id="inlineCheckbox4" value="Fishing"> Fishing
            </label>
        </div>
    </div>
    </br>

    <div class="form-group">
        <h3><label  class="col-sm-2 control-label">City</label></h3>
        <div class="col-sm-10">
            <select name="city[]" multiple="multiple" class="form-control" required="required">
                <option value=""></option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Gajipur">Gajipur</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Kushtia">Kushtia</option>
                <option value="Khulna">Khulna</option>
                <option value="Barisal">Barisal</option>
                <option value="Dinajpur">Dinajpur</option>
                <option value="Noakhali">Noakhali</option>
                <option value="Feni">Feni</option>
                <option value="Comilla">Comilla</option>
                <option value="Khagrachori">Khagrachori</option>
                <option value="Rangamati">Rangamati</option>
                <option value="Jhinaidah">Jhinaidah</option>
                <option value="Potuakhali">Potuakhali</option>
                <option value="Moulovibazar">Moulovibazar</option>
                <option value="Rongpur">Rongpur</option>
                <option value="Laxmipur">Laxmipur</option>
                <option value="Foridpur">Foridpur</option>
            </select>
        </div>
    </div>
    <br/>
    <div class="col-sm-2 control-label">

    <button type="submit" class=" btn btn-danger""><h4>Update</h4></button>
    </div>
</form>

<!--<a href="list.php">Go to Home</a>-->
<div class="col-sm-2 control-label">
    <a href="list.php" class="btn btn-primary btn-lg active" role="button">Go to List</a>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>

</body>
</html>