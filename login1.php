<?php
$con=mysqli_connect("localhost","root","","helping");
if($con){
}
$userid=$_POST['userid'];
$password=$_POST['password'];

$sql="SELECT * from signup u where u.userid= '$userid' and u.password='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1){
	header("Location: uhome.php");
	
}

?>

