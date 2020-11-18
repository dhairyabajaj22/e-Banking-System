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
	
.details{
	padding-top: 50px;
	color:#235f83;
	font-size: 35px;
	font-family: "Snell Roundhand";
}
.img1{
	float:left;
	padding-right: 100px;
}
</style>
<?php include_once("menu.html"); ?>
<div class ="details">	
<center><p class="details" style=" color:#235f83; font-size: 100px"> Customer Details</p></center>
<?php
		
			$CId=$_POST['view'];
			
			$con = mysqli_connect('localhost', 'root', '', 'customers');
			if($con === false)
			{
				die("ERROR: Could not connect. ".mysqli_connect_error());
			}
			
			$q = "SELECT * FROM customer WHERE CId= '$CId' ";
			$result = mysqli_query($con, $q);
			if($result === false)
			{
				die("ERROR: Query not executed. ");
			}
			
			$row = mysqli_fetch_array($result);
			echo '<img class="img1" src="data:images/jpeg;base64,'.base64_encode($row['Images'] ).'" height="400" width="300"/>';
			echo "<br>";
			echo"Customer Id: ".$row['CId']."<br> Customer Name: ".$row['Name']."<br> Bank Balalnce:".$row['BankBalance']."<br> E-Mail Address:".$row['Email']."<br> Contanct No.:".$row['Phone'];
			
				
			mysqli_free_result($result);
			
			mysqli_close($con);
				
				
		?>
		<div class ="details">	
	<!--Including Footer--!>
<?php include_once("footer.html"); ?>
	</html>