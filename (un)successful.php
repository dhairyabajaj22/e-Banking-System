<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
<script>
window.onload = function(){
	//canvas init
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	
	//canvas dimensions
	var W = window.innerWidth;
	var H = window.innerHeight/4;
	canvas.width = W;
	canvas.height = H;
	
	//snowflake particles
	var mp = 200; //max particles
	var particles = [];
	for(var i = 0; i < mp; i++)
	{
		particles.push({
			x: Math.random()*W, //x-coordinate
			y: Math.random()*H, //y-coordinate
			r: Math.random()*4+1, //radius
			d: Math.random()*mp, //density
            color: "rgba(" + Math.floor((Math.random() * 255)) +", " + Math.floor((Math.random() * 255)) +", " + Math.floor((Math.random() * 255)) + ", 0.8)"
		})
	}
	
	//Lets draw the flakes
	function draw()
	{
		ctx.clearRect(0, 0, W, H);
		
		
		
		for(var i = 0; i < mp; i++)
		{ 
			var p = particles[i];
            ctx.beginPath();
            ctx.fillStyle = p.color;
			ctx.moveTo(p.x, p.y);
			ctx.arc(p.x, p.y, p.r, 0, Math.PI*2, true);
            ctx.fill();
		}
		
		update();
	}
	
	//Function to move the snowflakes
	//angle will be an ongoing incremental flag. Sin and Cos functions will be applied to it to create vertical and horizontal movements of the flakes
	var angle = 0;
	function update()
	{
		angle += 0.01;
		for(var i = 0; i < mp; i++)
		{
			var p = particles[i];
			//Updating X and Y coordinates
			//We will add 1 to the cos function to prevent negative values which will lead flakes to move upwards
			//Every particle has its own density which can be used to make the downward movement different for each flake
			//Lets make it more random by adding in the radius
			p.y += Math.cos(angle+p.d) + 1 + p.r/2;
			p.x += Math.sin(angle) * 2;
			
			//Sending flakes back from the top when it exits
			//Lets make it a bit more organic and let flakes enter from the left and right also.
			if(p.x > W+5 || p.x < -5 || p.y > H)
			{
				if(i%3 > 0) //66.67% of the flakes
				{
                    particles[i] = {x: Math.random()*W, y: -10, r: p.r, d: p.d, color : p.color};
				}
				else
				{
					//If the flake is exitting from the right
					if(Math.sin(angle) > 0)
					{
						//Enter from the left
                        particles[i] = {x: -5, y: Math.random()*H, r: p.r, d: p.d, color: p.color};
					}
					else
					{
						//Enter from the right
                        particles[i] = {x: W+5, y: Math.random()*H, r: p.r, d: p.d, color : p.color};
					}
				}
			}
		}
	}
	
	//animation loop
	setInterval(draw, 10);
}
</script>
<body >
<style>

.details{
	font-size: 100px;
	text-align:center;

	font-family: "Snell Roundhand";
}

* {margin: 0; padding: 0;}

body {
	
	background: white;
}
canvas {
	display: block;
}
</style>
<div class ="details">	
<?php
$CId=$_POST['CId'];
$CId2=$_POST['CId2'];
$Amount=$_POST['Amount'];
/* Form Validation*/
if (empty($CId)||empty($CId2)||empty($Amount))
{
		?><center><i class="fa fa-exclamation-triangle" style="font-size:300px; color: #efcc00; padding: 40px"></i>	</center>
		<?php echo" Please Enter the Values.";
}
else
{
	

	// Create connection
	$conn = new mysqli('localhost', 'root', '', 'customers');
	// Check connection
	$q = "SELECT * FROM customer WHERE CId= '$CId' ";
	$result = mysqli_query($conn, $q);
	$row = mysqli_fetch_array($result);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "UPDATE customer SET BankBalance=BankBalance+'$Amount' WHERE CId='$CId2'";
	$sql1="UPDATE customer SET BankBalance=BankBalance-'$Amount' WHERE CId='$CId'";
	$count = mysqli_num_rows($result);

	if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $row['BankBalance']>=$Amount && $row['BankBalance']!=0 && $CId!=$CId2  ) {
	  ?> <canvas id="canvas"></canvas>	
	  <center><i class="fa fa-check-circle" style="font-size:300px;color: #4CAF50"></i>	</center>
		
	  <?php
	  echo "Transaction Successful!!!";
	} else {
	  ?><center><i class="fa fa-exclamation-triangle" style="font-size:300px; color: #efcc00; padding: 40px"></i>	</center>
	  <?php echo "Transaction Failed. " . $conn->error;
	}

	$conn->close();
}
?>

</div>
</body>
</html>