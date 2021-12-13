<!DOCTYPE html>
<html>
<head>
    <title>display records</title>
    <style>
    	.a{
    		background-color: red; 
    		color:white;
    		text-decoration: none;
    		border-radius: 5px;
    		padding: 1px;
    	}
    	.b{
    		height: 30px;
    	}

    </style>
</head>
<body style="background-image: url(images/66773.jpg);">
	<table border="2" style="width: 50%;text-align: center;margin-top: 7%;margin-left: 35%;padding: 10px;">
		<tr class='b'>
             <th>Username</th>
             <th>Name</th>
             <th>Address</th>
             <th>Phone Number</th>
             <th>Email</th>
             <th>Password</th>
             <th>Actions</th>

		</tr>

	

<?php
include "includes/headeremp.php";
include "navemp.php";

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$query="select * from supplier";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{ 
		echo "<tr class='b'>";
		echo "<td>".$result['username']."</td>";
		echo "<td>".$result['name']."</td>";
		echo "<td>".$result['address']."</td>";
		echo "<td>".$result['phno']."</td>";
		echo "<td>".$result['email']."</td>";
		echo "<td>".$result['passwd']."</td>";
		echo "<td><a class='a' href='delete.php?id=".$result['username']."'>delete</a></td>"; 
		echo "</tr>";
	}
}
else
{
	echo "no records found";
}
?>
</table>
</body>
</html>