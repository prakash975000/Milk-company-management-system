<!DOCTYPE html>
<html>
<head>
	<title>Purchase</title>
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
<body >

	<?php 
	   include "includes/headeremp.php";
       include "navemp.php";
	 ?>

<form action="purconn.php" class="txt" method="POST"><br>
	<p style="text-align: center;font-size: 30px;margin-top: 5%;"><b><u>Purchase details</b></u></p>
<div style="text-align: center;font-size: 20px;margin-top: 5%">

<div class="form-element"> 
<label>Supplier Id 	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type="text" class="inp" name="username" required="">
</div>
<div class="form-element">
<label>Purchased milk(litres) &nbsp &nbsp &nbsp &nbsp</label>
<input type="text" class="inp" name="litre" required="">
</div>
<div class="form-element">
<label>Milk Quality/degree &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type="text" name="degree" class="inp" required="">
</div>
<div class="form-element">
<label>Paid Advance &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp</label>
<input type="text" name="advance" class="inp" required="">
</div>
<div class="form-element">
<label>Purchased Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </label>
<input type="date" name="date" required="" class="inp" style="height: 18px;width: 175px" required="">
</div><br><br>
<div>
  
  <button type="submit" name="submit" class="su" value="submit" style="margin-left: -1%;padding: 10px">Submit</button>
  <button type="reset" name="reset" class="su" value="reset" style="margin-left: 1%;padding: 10px">reset</button>
  <button type="submit" name="update" class="su" value="update" style="margin-left: 1.5%;padding: 10px">update </button>
</div>
</div>
</form>

</body>
</html>