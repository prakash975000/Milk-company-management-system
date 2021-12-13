<!DOCTYPE html>
<html>
<head>
	<title>stock</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/submit.css">
<style>	
.txt{
	width:700px;
	height:500px;
	margin-top: 3%;
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
	<form action=""  method="POST">
	<input type="date" name="sdate"  id="myText" placeholder="Enter date" class="inp" style="text-align: center;margin-top: 2%;margin-left: 75%;padding: 10px;height: 7px">&nbsp
	<button name="search"  class="su">Search</button> 
	</form>
	<?php
    
    
	$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");

	if(isset($_POST['search']))
	{
		$sdate=$_POST['sdate'];
		$query="select sum(litre) as total from purchase where date ='$sdate'";
		$query1="select sum(litre) as totalc from sale where date ='$sdate'";
		$query_run=mysqli_query($conn,$query);
		$queryrun=mysqli_query($conn,$query1);
		$row=mysqli_fetch_array($query_run);
		$ro=mysqli_fetch_array($queryrun);

			
				$p = $row['total'];

				$r = $ro['totalc'];

				$a =abs($p-$r);
				?>
				<form action="totactconn.php" class="txt" method="POST"><br>
			<div style="text-align: center;font-size: 20px;margin-top: 5%">
				<p style="text-align: center;font-size: 30px;margin-top: 5%;"><b><u>Stock details</b></u></p><br>

			<div class="form-element">
			<label>Total Purchased Milk(litres)&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
			<input type="text" name="pur" value="<?php echo @$p ?>" class="inp">
			</div>
			<div class="form-element">
			<label>Total sold Milk(litres) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
			<input type="text" name="sale" value="<?php echo @$r ?>" class="inp">
			</div>
			<div class="form-element">
			<label style="margin-left: -57.5%">Stock milk</label><br>
			<label>Sent to Subcontractor &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
			<input type="text" name="stock" value="<?php echo @$a ?>" class="inp"> 
			</div>
			<div class="form-element">
			<label>Stock Sent Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
			<input type="date" name="date" value="<?php echo $_POST['sdate'] ?>" class="inp" style="height: 18px;width: 175px" >
			</div><br><br>
			<?php
			
			
	}
	?>
			<div>
			  <button type="submit" name="submit"  class="su" value="submit" style="margin-left: -1%;padding: 10px">Submit</button>
			  <button type="reset" name="reset"  class="su" value="reset" style="margin-left: 1%;padding: 10px">reset</button>
			  <button type="update" name="update"  class="su" value="update" style="margin-left: 1.5%;padding: 10px">update </button>
			</div>
			</div>
			</form>
			
</body>
</html>