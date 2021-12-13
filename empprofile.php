<!DOCTYPE html>
<html>
<head>
    <title>display records</title>
    <link rel="stylesheet" type="text/css" href="css/submit.css">
    <script src="sweetalert.min.js"></script>
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
.inp{
	border-radius: 10px;
	font-size: 18px;
	padding: 2px;
}
</style>
</head>
<body style="background-image: url(images/66773.jpg);">

<?php

include "includes/headeremp.php";
include "navemp.php";

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$query="select * from employee where username='$p'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{
		?>
		<form id="register" class="txt"  method="POST" >
			<br><br><p style="font-size: 30px;text-align: center;"><b><u>Profile</u></b></p><br>
			<p style="font-size: 13px;text-align: center;color: red"><i>*If you change your details and press to submit your details</i></p><br><br>
	<div class="lable">
		    <label>Employee User id  &nbsp &nbsp </label>

	    	<input type="text"  name="username" class="inp" value="<?php echo $result['username']; ?>" required="" ><br><br>

	    	<label>Employee Name  &nbsp &nbsp &nbsp</label>

			<input type="text"  name="name" class="inp"  value="<?php echo $result['name']; ?>"  required="" ><br><br>

			<label>Employee Address  &nbsp</label>

			<input type="text" name="address" class="inp"  value="<?php echo $result['address']; ?>"  required="" ><br><br>

			<label>Mobile Number  &nbsp &nbsp &nbsp &nbsp</label>

			<input type="text" name="phno" class="inp"  value="<?php echo $result['phno']; ?>"  required=""><br><br>

			<label>Email id&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>

			<input type="email" name="email" class="inp"  value="<?php echo $result['email']; ?>"  required=""><br><br>

			<label>Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>

			<input type="text" id="ps" name="passwd" class="inp"  value="<?php echo $result['passwd']; ?>"  required=""><br><br><br>

			<button id="submit" type="submit" name="update" value="update" class="su" style= />submit</button>
	</div> 
</div>
		</form>
		
		<?php

	}
}
else
{
	echo "no records found";
}



$username = $_POST['username'];
$name = $_POST['name'];
$address = $_POST['address'];
$phno = $_POST['phno'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];

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
			    $query="select * from employee where username='$username'";
			    $result=mysqli_query($conn,$query);
			    $count=mysqli_num_rows($result);
			    if($count>0)
			    {
					$UPDATE = "UPDATE `employee` SET `name`='$name',`address`='$address',`phno`='$phno',`email`='$email',`passwd`='$passwd' WHERE `username`='$username'";

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
                    });
                </script>
                <?php
			    } 
			}
		}
		?>
</body>
</html>