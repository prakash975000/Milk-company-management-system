<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="sweetalert.min.js"></script>

</head>
<body>
<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$id = $_GET['id'];
				$query="select * from supplier where username='$id'";
			    $result=mysqli_query($conn,$query);
			    $count=mysqli_num_rows($result);
			    if($count>0)
			    {
					$delete = "DELETE FROM `supplier` WHERE `username`='$id'";

					$stmt = $conn->prepare($delete);
					$stmt->execute();
					$stmt->close();
					$conn->close();

				?>
                <script type='text/javascript'>
                
                swal({
                    title: "you are Succesfully deleted",
                    icon: "success",
                    button: "okey", 
                    }).then(function() {
                    window.location = "supret.php";
                    });
                </script>
                <?php 		
			    }
			     else
			    {		
			    ?>
                <script type='text/javascript'>
                swal({
                    title: "user id is not available",
                    icon: "error",
                    button: "okey", 
                    }).then(function() {
                    window.location = "supret.php";
                    });
                </script>
                <?php	       
			    } 

?>
</body>
</html>


