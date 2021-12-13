<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
</style>
<body style="background: url(images/m1.jpeg) ;
            background-size: cover;">
		<?php
		include "includes/headeremp.php";
		include "navemp.php";
	 ?>
	  <br><p style="font-weight:bold;font-size: 30px;margin-left: 45%;">Welcome back <?php echo $p ?> </p>
	 
	<div class="lable" style="margin-left: 42%;margin-top: 5%;font-size: 20px">
	    <a href="supret.php" style="background:linear-gradient(to right,white,grey);padding: 3%;border-radius: 30px;text-decoration: none;margin-top: +30px;color: black;margin-left: -15%">Supplier details</a>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
	    <a href="cusret.php" style="background:linear-gradient(to right,white,grey);padding: 3%;border-radius: 30px;text-decoration: none;color: black;margin-left: 25%">Customer details</a>
	</div> 


	

</body>
</html>