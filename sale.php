<!DOCTYPE html>
<html>
<head>
	<title>Sales</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/submit.css">
	<style>	
.txt{
	width:700px;
	height:560px;
	margin-top: 5%;
	background-color:transparent;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	margin-left: 35%;
	text-align: center;
	font-weight: bold;
	font-size: 20px;

}
.inp{
	border-radius: 10px;
	font-size: 15px;
	padding: 2px;
}
</style>
</head>
<body style="background-image: url(images/66773.jpg);">

	<?php 
	   include "includes/headeremp.php";
       include "navemp.php";
	 ?>
	 
<form action="saleconn.php" class="txt" method="POST"><br>
	<p style="text-align: center;font-size: 30px;margin-top: 5%;"><b><u>Sales details</b></u></p>
<div style="text-align: center;font-size: 20px;margin-top: 5%">

<div class="form-element">
<label>Customer Id  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type="text" name="username" required="" class="inp">
</div>

<div class="form-element">
<label>Supply Milk(litres)&nbsp &nbsp &nbsp &nbsp</label>
<input type="text" name="litre" class="inp" required="">
</div>
<div class="form-element">
<label>Received Advance &nbsp &nbsp &nbsp &nbsp&nbsp</label>
<input type="text" name="advance" class="inp" required="">
</div>
<div class="form-element">
<label>Supply Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  </label>
<input type="date" name="date" required="" style="height: 18px;width: 175px" class="inp" required="">
</div><br><br>
<div>
  <button type="submit" name="submit" class="su" value="submit" style="cursor:pointer;margin-left: -1%;padding: 10px">Submit</button>
  <button type="reset" name="reset" class="su"  value="reset" style="cursor:pointer;margin-left: 1%;padding: 10px">reset</button>
  <button type="submit" name="update" class="su"  value="update" style="cursor:pointer;margin-left: 1.5%;padding: 10px">update </button>
</div>
</div>
</form>
</body>
</html>