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
		background-color:#E0FFFF;
	}
</style>
<!--Including Navbar--!>
<?php include_once("menu.html"); ?>
<!--Transaction Details -->
<div class="w3-container" id="where" style="padding-top: 70px; padding-bottom:32px;">
  <div class="w3-content" style="max-width:5000px">
    <h1 class="w3-center w3-padding-48"><span class="headingg" style="color:#FF1493">Transaction Details</span></h1>
    <h3  style="color: #FF1493"><p><span class="w3-tag"style="background-color: #d7b692; color:#FF1493" >FYI!</span> We ensure hassle-free and safe transactions.</p></h3>
		<div class="bg-img">
			
			<form name="RegForm" action="(un)successful.php" onsubmit= "return Validate()" class="container3" method="post">
			<h1> Enter Transaction Details</h1>
				 <label for="CId"><b>Account Holder's Customer Id: </b></label><input type="text" placeholder="Ex: S10" name="CId"><br>
				 <label for="Amount"><b>Amount: </b></label><input type="text" placeholder="In Rupees" name="Amount"><br>
				 <label for="CId2"><b>Pay (Customer Id): </b></label> <input type="text" placeholder="Ex: S46" name="CId2"><br>
				 <input type="submit" class="btn" value="Submit" name="Submit" /> 
			</form>
		</div>
  </div>
</div>

<br><br><br><br><br>
<?php include_once("footer.html"); ?>
</html>