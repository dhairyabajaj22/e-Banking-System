<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" type="text/css" href="bankcss.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel = "icon" href =  "05-digital-banking-logo.jpg"  type = "image/x-icon"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<body bgcolor="#c9d5e3" >

<!-- Links (sit on top) -->
<div class="w3-top " >
  <div class="w3-row w3-padding clr">
	<div class="w3-col s3">
		<a href="#" class="w3-button w3-block"><img src= 
			"05-digital-banking-logo.jpg"  width="70" height="60"
				alt=""> 
		</a>
    </div>
    
    <div class="w3-col s3  ">
      <a href="#about" class="w3-button w3-block  btnn"><b>ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="customers.php" class="w3-button w3-block  btnn">CUSTOMERS</a>
    </div>
    <div class="w3-col s3">
      <a href="payment.php" class="w3-button w3-block  btnn">TRANSACTIONS</a></b>
    </div>
  </div>
</div>
<br><br><br><br><br>


  
<div class="header">  
  <marquee><b><p>If slowness is observed during loading the Transaction Page, please refresh the page for better experience.</b></p></marquee>
</div>
</br>
<div class="container1">
  <img src="finance-clipart-personal-finance-17.png" height="450" width="500"  alt="hello" style="width:100%;">
  <div class="content">
    <h1>Indian Bank</h1>
    <p>Relationship Beyond Banking..</p>
  </div>
</div>

</br>
</br>
</br>
</br>
</br>
</br>
<!-- About Container -->
<div class="w3-container" style="background-color:#00243f
; color:#e9cf87" id="about">
  <div class="w3-content" style="max-width:5000px color: #e9cf87">
    <h1 class="w3-center w3-padding-64"><span style="color:white" class="headingg">About Us</span></h1>
	<div class="polaroid">
  <img src="bank-account-promotions-1068x713.jpg" class="pimg" alt="About" style="width:100%">
  <div class="container4">
  <p style="color:black font-family:Snell Roundhand">Relationship Beyond Banking....</p>
  </div>
</div><br><br>

    <p >Indian Bank welcomes you to explore the world of premier bank in India.</p>
    <p>In this section, you can access detailed information on Overview of the Bank, Technology Upgradation in the Bank, Board of Directors, Financial Results and Shareholder Info. The Bank is actively involved since 1973 in non-profit activity called Community Services Banking. All our branches and administrative offices throughout the country sponsor and participate in large number of welfare activities and social causes. </p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>Our business is more than banking because we touch the lives of people anywhere in many ways.</i></p>
      <p>Our commitment to nation-building is complete & comprehensive.</p>
    </div>
  </div>
</div>

<br><br><br><br><br>



<!-- Add a background color and large text to the whole page -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="4" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="5" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img  src="banner19.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img  src="banner20.jpg" alt="Chicago" style="width:100%;">
       
      </div>
    
      <div class="item">
        <img src="banner21.jpg" alt="ok" style="width:100%;">
  
      </div>
	  <div class="item">
        <img src="banner3.jpg" alt="okay" style="width:100%;">
        
      </div>
	  <div class="item">
        <img src="banner7.jpg" alt="okayy" style="width:100%;">
        
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 



<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


<!-- Footer -->
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include_once("footer.html"); ?>
</body>
</html>