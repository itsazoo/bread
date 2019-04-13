<!DOCTYPE HTML frameset DTD>
<html>
	<head>
		<title>itsazoo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="main.css" rel="stylesheet" type="text/css"/>
		<link href="flexbox.css" rel="stylesheet"  type="text/css"/>
		<script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			crossorigin="anonymous">
		</script>
		<script> 
			$(function(){
			$("#header").load("header.html"); 
			$("#footer").load("footer.html"); 
			});
		</script> 
	</head>

<body>
<section class="banner">
<header>
	
	<div id="header"></div>

	<nav>
		<a href = "itsazoo.html">home</a>
		<a href = "frame1.htm">contact</a>
		<a href = "frame2.htm">menu</a>
		<a>order</a>
	</nav>
	
</header>
</section>
<hr>
<section class = "body">
<?php
$bread = $name = $delivery = $street = $city = $postal = $email = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$bread = test_input($_POST["bread"]);
	$name = test_input($_POST["name"]);
	$delivery = test_input($_POST["delivery"]);
	$email = test_input($_POST["email"]);

}
?>
<?php 
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "\n";
fwrite($myfile, $txt);
?>
<div class = "orderform">
	<form method="POST" action="frame3.php">
	
	<label for="ordered item">Select your bread</label><br>
	<!--  <div class = "choosebread">-->
  	<input type="checkbox" name="bread" value="Multigrain">Multigrain<br>
  	<input type="checkbox" name="bread" value="Sourdough">Sourdough<br>
  	<input type="checkbox" name="bread" value="Rye">Rye<br>
  	<input type="checkbox" name="bread" value="Plain">Plain<br>
  	<input type="checkbox" name="bread" value="French">French<br>
  	<input type="checkbox" name="bread" value="Cheese">Cheese<br>
  	<input type="checkbox" name="bread" value="Walnut">Walnut<br>
  	<input type="checkbox" name="bread" value="Pinenut">Pinenut<br>
  	<input type="checkbox" name="bread" value="Honey"> Honey<br><br>
  	<!-- </div> -->
    
    <label for="name">Name
    <input type="text" name="name" id="name" required /></label><br><br>
 	
    <label for="pickUp">Pick up 
    <input type="radio" name="delivery" id="pick up" value="pick up"/></label><br>
    <label for="deliver">Deliver 
    <input type="radio" name="delivery" id="deliver" value="deliver" /></label><br>
    <label for="street#">Street# 
    <input type="text" name="delivery" id="street#"/></label><br>
    <label for="street">Street 
    <input type="text" name="delivery" id="street"/></label><br>
    <label for="city">City 
    <input list="city" name="delivery">
  	<datalist id="city">
		<option value="Victoria">
		<option value="Langford">
		<option value="Metchosin">
		<option value="Sidney">
		<option value="Tofino">
  	</datalist></label><br>
  	<label for="postal code">Postal Code
    <input type="text" name="delivery" id="Postal"/></label><br><br>
 
    <label for="email">Email 
    <input type="email" name="email" id="email" /></label><br>
 
    <label>Receive newsletter
        <input type="checkbox" name="receiveNewsletter" checked /><br><br>
    </label>
 
    <label>Date of order
        <input type="date" name="dateOfOrder" required/><br><br>
    </label>
 
 
    <input type="submit" />
</form>

</div>
<?php 
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "\n";
fwrite($myfile, $name);
fwrite($myfile, $txt);
fwrite($myfile, $email);
fwrite($myfile, $txt);
fwrite($myfile, $bread);
fwrite($myfile, $txt);
fwrite($myfile, $delivery);
fclose($myfile);
?>


</div>
</section>
<div id = "footer"></div>
</body>

</html>