<!DOCTYPE html>
<html>
<body>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" type="text/css" href="bankcss.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel = "icon" href =  "05-digital-banking-logo.jpg"  type = "image/x-icon"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	body{
		background-color:#feeecd;
	}
</style>
<!--Including Navbar--!>
<?php include_once("menu.html"); ?>
<!-- CUstomer Details -->
<div class="w3-container" style="padding-top: 100px; padding-bottom:32px;" id="menu">
<div class="w3-content" style="color:white; max-width:5000px ">
<img src="avatar-377-456329.png" alt="Avatar" class="avatar">
<img src="img_avatar.png" alt="Avatar" class="avatar">
<img src="img_avatar2.png" alt="Avatar" class="avatar">
<img src="avatar-370-456322.webp" alt="Avatar" class="avatar">
<img src="avatar-377-456329.png" alt="Avatar" class="avatar1">
<img src="img_avatar.png" alt="Avatar" class="avatar1">
<img src="img_avatar2.png" alt="Avatar" class="avatar1">
<img src="avatar-370-456322.webp" alt="Avatar" class="avatar1">
<h1 class="w3-center w3-padding-64"><span class="headingg "style="color:#235f83">Our Customers</span></h1>
<?php
$con = mysqli_connect('localhost', 'root', '', 'customers');
if($con === false)
	{
		die("ERROR: Could not connect. ".mysqli_connect_error());
	}
$q = "SELECT * FROM customer";
$result = mysqli_query($con, $q);
if($result === false)
{
	die("ERROR: Query not executed. ");
}
$count = mysqli_num_rows($result);
if($count > 0)
{
	echo"<table><tr><th>Customer Id</th><th>Customer Name</th><th>Bank Balance</th><th>View Details</th>";
	for($i=1;$i<=$count;$i++)
	{
		$row = mysqli_fetch_array($result);
		echo"<tr><td>".$row['CId']."</td><td>".$row['Name']."</td><td>".$row['BankBalance']."</td><td><form action = viewdetails.php method=post> <button value=".$row['CId']." type=submit name= view> View Details </button></td></tr></form>";
	}
	echo"</table>";
	mysqli_free_result($result);
}
else
{
	echo"No record found";
}
mysqli_close($con);
?>
</div>
</div>
<br><br><br><br><br>
<!--Including Footer--!>
<?php include_once("footer.html"); ?>
</html>