<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="sweetalert.min.js"></script>
</head>
<body>

<?php

      

$username = $_POST['username'];
$litre = $_POST['litre'];
$advance = $_POST['advance'];
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
				$username=$_POST['username'];
			    $date=$_POST['date'];
			    $query="select * from sale where username='$username' and date='$date'";
			    $result=mysqli_query($conn,$query);
			    $count=mysqli_num_rows($result);
			    if($count>0)
			    {
				$UPDATE = "UPDATE `sale` SET `litre`='$litre',`advance`='$advance' WHERE `username`='$username' && `date`='$date'";

			
				$stmt = $conn->prepare($UPDATE);
				$stmt->execute();
				$stmt->close();
				$conn->close();

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
				
			    }
			    else
			    {
			    	?>
	                <script type='text/javascript'>
	                swal({
	                    title: "Customer id and date is not available",
	                    icon: "error",
	                    button: "okey", 
	                    }).then(function() {
	                    window.location = "sale.php";
	                    });
	                </script>
	                <?php
			    }   
			
			}
			else
			{
				$username=$_POST['username'];
			    $query="select * from customer where username='$username'";
			    $result=mysqli_query($conn,$query);
			    $count=mysqli_num_rows($result);
			    if($count>0)
			    {
				$INSERT = "INSERT into sale(username,litre,advance,date) values(?,?,?,?)";

			
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("siis",$username,$litre,$advance,$date);
				$stmt->execute();
				$stmt->close();
				$conn->close();

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
				}
				else
				{
				
			    	?>
	                <script type='text/javascript'>
	                swal({
	                    title: "Customer id is not available",
	                    icon: "error",
	                    button: "okey", 
	                    }).then(function() {
	                    window.location = "sale.php";
	                    });
	                </script>
	                <?php 
				}
			
			}
			
	    }
	

?>

</body>
</html>