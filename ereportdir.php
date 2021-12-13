<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script type="text/javascript">
		function togglemenu()
		{
			document.getElementById('sidebar').classList.toggle('active');
		}

	</script>
</head>
<body style="background-image: url(images/66773.jpg);">

    <?php
      include "includes/header.php";
	?>
	
	<div id="sidebar" onclick="togglemenu()">
		<div class="toggle-btn">

		<span></span>
		<span></span>
		<span></span>
	    </div>
	   <ul>
	   	<li><a href="cusret.php">Customer details</a></li>
	   	<li><a href="supret.php">Supplier details</a></li>
	   	<li><a href="supplierreport.php">Customer report</a></li>
	   	<li><a href="customerreport.php">Supplier report</a></li>
	   	<li><a href="stockreport.php">Stock report</a></li>
	   	<li><a href="payreport.php">Payment report</a></li>
	   </ul>
	</div>

</body>
</html>