<!DOCTYPE html>
<html>
<head>
    <title>supplier report</title>
    <link rel="stylesheet" type="text/css" href="css/submit.css">
</head>
<body style="background-image: url(images/66773.jpg);">

	<table border="2" style="width: 40%;text-align: center;margin-top: 3%;margin-left: 37%;">
		<tr style="height: 35px">
             <th> Username </th>
             <th> Purchase Litres </th>
             <th> Degree/Quality </th>
             <th> Advance Paid </th>
             <th> Date of Purchase </th>
		</tr>

	
<?php
include "includes/headeremp.php";
include "navemp.php";
?>
<form action="" method="POST">
<input type="text" name="searcht" id="myText" placeholder="Enter customer id" style="text-align: center;margin-top: 2%;margin-left: 75%;padding: 10px;height: 10px;border-radius: 10px;">&nbsp
<button name="search" class="su">Search</button> 
</form>
<p style="text-align: center;font-size: 30px;margin-top: 2%;margin-left: 13%"><b><u>Supplier Report</u></b></p>

<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");

if(isset($_POST['search']))
{
	$id=$_POST['searcht'];
	$query="select * from purchase where username='$id'";
	$query_run=mysqli_query($conn,$query);

		while ($row=mysqli_fetch_array($query_run)) 
		{
			echo "
			<tr>
			<td>".$row['username']."</td>
			<td>".$row['litre']."</td>
			<td>".$row['degree']."</td>
			<td>".$row['advance']."</td>
			<td> ".$row['date']." </td>
			</tr>";
		}
}
elseif(empty($_POST['search']))
{
	$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
	$query="select * from purchase";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
		while ($result=mysqli_fetch_assoc($data)) 
		{
			echo "
			<tr>
			<td>".$result['username']."</td>
			<td>".$result['litre']."</td>
			<td>".$result['degree']."</td>
			<td>".$result['advance']."</td>
			<td> ".$result['date']." </td>
			</tr>";
		}
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