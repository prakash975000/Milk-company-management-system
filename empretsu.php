<!DOCTYPE html>
<html>
<head>
    <title>display records</title>
    <style>
    	.a
    	{
    		height: 30px;
    	}
    	.txt{
		  width:1000px;
		  height:560px;
		  margin-top: 5%;
		  background-color:transparent;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  margin-left: 25%;
		  text-align: center;  
		  font-size: 20px;
		}

    </style>
</head>
<body>
	<?php
include "includes/headersup.php";
include "navsup.php";
?>
 <form class="txt" style="text-align: center;margin-top: 5%"><br>

	<table border="2" style="width: 70%;text-align: center;margin-top: 7%;margin-left: 15%;">
		<tr class="a">
             <th>Username</th>
             <th>Name</th>
             <th>Address</th>
             <th>Phone Number</th>
             <th>Email</th>
		</tr>
<?php
$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$query="select * from employee";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
?><p style="font-size: 30px;"><b><u>Employee details</u></b></p><?php 
if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{

		echo "
		<tr class='a'>
		<td>".$result['username']."</td>
		<td>".$result['name']."</td>
		<td>".$result['address']."</td>
		<td>".$result['phno']."</td>
		<td> ".$result['email']." </td>
		</tr>";
	}
}
else
{
	echo "no records found";
}
?>

</table>
</form>
</body>
</html>