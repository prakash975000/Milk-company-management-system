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
	   	<li><a href="pur.php">Employee details</a></li>
	   	<li><a href="sale.php">My report</a></li>
	   </ul>
	</div>

</body>
</html>