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
$degree = $_POST['degree'];
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
			    $query="select * from purchase where username='$username' and date='$date'";
			    $result=mysqli_query($conn,$query);
			    $count=mysqli_num_rows($result);
			    if($count>0)
			    {
			    $UPDATE = "UPDATE `purchase` SET `litre`='$litre',`degree`='$degree',`advance`='$advance' WHERE `username`='$username' && `date`='$date'";

			
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
	                    title: "Supplier id and date is not available",
	                    icon: "error",
	                    button: "okey", 
	                    }).then(function() {
	                    window.location = "pur.php";
	                    });
	                </script>
	                <?php
			    }
			    	
			}
			else
			{
				$username=$_POST['username'];
			    $query="select * from supplier where username='$username'";
			    $result=mysqli_query($conn,$query);
			    $count=mysqli_num_rows($result);
			    if($count>0)
			    {
				$INSERT = "INSERT into purchase(username,litre,degree,advance,date) values(?,?,?,?,?)";
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("siiis",$username,$litre,$degree,$advance,$date);
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
	                    title: "Supplier id is not available",
	                    icon: "error",
	                    button: "okey", 
	                    }).then(function() {
	                    window.location = "pur.php";
	                    });
	                </script>
	                <?php 
				}
		
			     
			}
			
	    }
	

?>

</body>
</html>