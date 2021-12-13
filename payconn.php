<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="sweetalert.min.js"></script>
</head>
<body>

<?php

      
$payf = $_POST['payf'];
$payt = $_POST['payt'];
$pay = $_POST['pay'];
$Username = $_POST['Username'];
$ptype = $_POST['ptype'];
$pmethod = $_POST['pmethod'];
$payd = $_POST['payd'];
$amtlit = $_POST['amtlit'];
$amt = $_POST['amt'];
$totad = $_POST['totad'];


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
			    $query="select * from payment where Username='$Username' and payd='$payd'";
			    $result=mysqli_query($conn,$query);
			    $count=mysqli_num_rows($result);
			    if($count>0)
			    {
					$UPDATE = "UPDATE `payment` SET `pay`='$pay',`ptype`='$ptype',`pmethod`='$pmethod',`amtlit`='$amtlit',`totad`='$totad',`amt`='$amt',`payf`='$payf',`payt`='$payt' WHERE `Username`='$Username' && `payd`='$payd'";

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
                    title: "user id and date is not available",
                    icon: "error",
                    button: "okey", 
                    }).then(function() {
                    window.location = "pay.php";
                    });
                </script>
                <?php		 
			    } 
			}
			if(isset($_POST['submit']))
			{
				if($pay == 'supplier')
				{
				    $query="select * from purchase where username='$Username'";
				    $result=mysqli_query($conn,$query);
				    $count=mysqli_num_rows($result);
				    if($count>0)
				    {
						$INSERT = "INSERT into payment(payf,payt,pay,Username,ptype,pmethod,payd,amtlit,totad,amt) values(?,?,?,?,?,?,?,?,?,?)";
						$stmt = $conn->prepare($INSERT);
						$stmt->bind_param("ssssssssss",$payf,$payt,$pay,$Username,$ptype,$pmethod,$payd,$amtlit,$totad,$amt);
						$stmt->execute();
						$stmt->close();
						$conn->close();

 						?>
		                <script type='text/javascript'>
		                
		                swal({
		                    title: "you are Succesfully Submited",
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
		                    window.location = "pay.php";
		                    });
		                </script>
		                <?php
						
				  	}
				    
				}

				if($pay == 'customer')
				{
				    $query="select * from sale where username='$Username' ";
				    $result=mysqli_query($conn,$query);
				    $count=mysqli_num_rows($result);
				    if($count>0)
				    {
						$INSERT = "INSERT into payment(payf,payt,pay,Username,ptype,pmethod,payd,amtlit,totad,amt) values(?,?,?,?,?,?,?,?,?,?)";
						$stmt = $conn->prepare($INSERT);
						$stmt->bind_param("ssssssssss",$payf,$payt,$pay,$Username,$ptype,$pmethod,$payd,$amtlit,$totad,$amt);
						$stmt->execute();
						$stmt->close();
						$conn->close();
						?>
			                <script type='text/javascript'>
			                
			                swal({
			                    title: "you are Succesfully Submited",
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
		                    window.location = "pay.php";
		                    });
		                </script>
		                <?php
				  	}
				    
				}			
		    }
	    }
	

?>

</body>
</html>