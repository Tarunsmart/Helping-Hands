<?php
$con=mysqli_connect("localhost","root","","helping");
if($con){
}
$userid=$_POST['userid'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$sql="INSERT INTO signup (userid, password, mobile, email)
VALUES ('$userid', '$password', '$phone', '$email')";

if(mysqli_query($con,$sql)){
header("Location: login.php");
}
?>