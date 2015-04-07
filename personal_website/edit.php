<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "project");

$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$hobby=$_POST['hobby'];
$city=$_POST['city'];


$hobby = implode(',', $_POST['hobby']);
$city = implode(',', $_POST['city']);

$b_year=$_POST['b_year'];
$b_month=$_POST['b_month'];
$b_day=$_POST['b_day'];

$dob=$b_year.'-'.$b_month.'-'.$b_day;

echo $query="UPDATE `registration` SET  `first_name`= '$first_name',`last_name`= '$last_name',`email`='$email',`password`='$password',
`city`='$city',`bday`='$dob',`hobby`='$hobby',`city`='$city' where `id`= '$id'";
mysqli_query($link, $query) or mysql_error();

header('location:list.php');

?>