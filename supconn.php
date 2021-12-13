<!DOCTYPE html>
<html>
<head>
	<title>Supplier register</title>
	<script src="sweetalert.min.js"></script>
</head>
<body>

<?php

      
$username = $_POST['username'];
$name = $_POST['name'];
$address = $_POST['address'];
$phno = $_POST['phno'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$cpasswd = $_POST['cpasswd'];

if(!empty($username) || !empty($name) || !empty($address) || !empty($phno) || !empty($email) || !empty($passwd) || !empty($cpasswd))
{
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
			$SELECT = "SELECT username from supplier where username = ? Limit 1";
			$INSERT = "INSERT into supplier (username,name,address,phno,email,passwd,cpasswd) values(?,?,?,?,?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$username);
			$stmt->execute();
			$stmt->bind_result($username);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0)
			{
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssisss",$username,$name,$address,$phno,$email,$passwd,$cpasswd);
				$stmt->execute();

				?>
                <script type='text/javascript'>
                
                swal({
                    title: "you are Succesfully registered!, Please login to continue...",
                    icon: "success",
                    button: "okey", 
                    }).then(function() {
                    window.location = "loginsup.php";
                    });
                </script>
                <?php 

			}
			else
			{
				?>
                <script type='text/javascript'>
                swal({
                    title: "someone already register using this Username!!!! please try another your username",
                    icon: "error",
                    button: "okey",
                    }).then(function() {
                    window.location = "loginsup.php";
                    });
                </script>
                <?php
				
			}
			$stmt->close();
			$conn->close();
	    }
	
}
else
	{
		echo "all field are required";
		die();
	}
?>
</body>
</html>