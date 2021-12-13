<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="sweetalert.min.js"></script>
</head>
<body>

<?php

      

$pur = $_POST['pur'];
$sale = $_POST['sale'];
$stock = $_POST['stock'];
$date = $_POST['date'];

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "milkcompany";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	if (mysqli_connect_error())
		{
			die('Connect error('. mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else
		{
			if(isset($_POST['update']))
			{
				$UPDATE = "UPDATE `totalact` SET `pur`='$pur',`sale`='$sale' ,`stock`='$stock' WHERE  `date`='$date'";

			
				$stmt = $conn->prepare($UPDATE);
				$stmt->bind_param("iiis",$pur,$sale,$stock,$date);
				$stmt->execute();

				?>
                <script type='text/javascript'>
                
                swal({
                    title: "you are Succesfully updated",
                    icon: "success",
                    button: "okey", 
                    }).then(function() {
                    window.location = "empdir.php";
                    });
                </script>
                <?php
				
			$stmt->close();
			$conn->close();
			}
			else
			{
			$INSERT = "INSERT into totalact (pur,sale,stock,date) values(?,?,?,?)";

			
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("iiis",$pur,$sale,$stock,$date);
				$stmt->execute();

				?>
                <script type='text/javascript'>
                
                swal({
                    title: "you are Succesfully submited",
                    icon: "success",
                    button: "okey", 
                    }).then(function() {
                    window.location = "empdir.php";
                    });
                </script>
                <?php 
		
			$stmt->close();
			$conn->close();
			}
	    }
	

?>

</body>
</html>