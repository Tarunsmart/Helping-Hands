<html>
<head>
<link rel="stylesheet" type="text/css" href="s1.css">
<link rel="stylesheet" type="text/css" href="s3.css">
<link rel="stylesheet" type="text/css" href="s4.css">
</head>
<body background="h13.jpg">
<div class="home">
<table>
<tr>
<td>
<div class="scene">
  <div class="cube">
    <div class="side back">
      <div class="guides"></div> </div>
    <div class="side left">
      <div class="guides"></div></div>
    <div class="side right">
      <div class="guides"></div></div>
    <div class="side front">
  <div class="guides"></div></div></div></td>
<td>
<h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; HELPING HANDS - WE RISE BY LIFTING OTHERS </h1>

</td></tr>
</table>
</div>
<div class="code">
<marquee behavior="slide">
<center><b>YOU HAVE TWO HANDS ONE FOR HELPING YOURSELF,ONE FOR HELPING OTHERS</b></marquee></div>
<div class="main">
<ul>
<center>


<li><a href="#">home</a></li>
<li><a href="#">about this</a></li>
<li><a href="#">orphanizer homes</a></li>
<li><a href="#">oldage homes</a></li>
<li><a href="unotify.php">POST NOTIFICATION</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<li><a href="">LOGOUT</a></li></center>


</ul>
</div>
<div class="main1">
<div class="box"><h2>NOTIFICATIONS</h2>
<?php
$con=mysqli_connect("localhost","root","","helping");
if($con){
}
$sql="SELECT * from notifications";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

while($count>10){
$row=$result->fetch_assoc();
$count--;
}
while($row=$result->fetch_assoc()){
	$link=$row["link"];
echo "<a href='$link'>".$row["problem"]."</a>"."<br><br><br><br>";
}
?>




</div>

<div class="middle">
<div class="container">
<img class="myslides" src="h12.jpg" width="683px" height="330px" style="opacity:1">
<img class="myslides" src="h16.png" width="683px" height="380px">
<img class="myslides" src="h1.png" width="683px" height="370px">
</div><br/><br/><br/>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
       if (myIndex > x.length) {myIndex = 1} 
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);
}
</script>

</div>
</div>
</body>
</html>