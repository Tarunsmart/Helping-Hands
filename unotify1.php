<?php
$con=mysqli_connect("localhost","root","","helping");
if($con){
}
$userid=$_POST['userid'];
$password=$_POST['password'];

$sql="INSERT INTO notifications1 (pno,problem,link)
VALUES (101,'$userid', '$password')";

if(mysqli_query($con,$sql)){
header("Location: uhome.php");
}
?>