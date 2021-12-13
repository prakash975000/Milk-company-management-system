<!DOCTYPE html>
<html>
<head>
    <title>display records</title>
</head>
<body style="background-image: url(images/66773.jpg);">

	<table border="2" style="width: 40%;text-align: center;margin-top: 4%;margin-left: 38%;">
		<tr style="height: 35px">
			 <th>Total Purchase(Litres)</th>
			 <th>Total Sold(litres)</th>
             <th>Stock(litres)</th>
             <th>date</th>
             
		</tr>

	

<?php
include "includes/headeremp.php";
include "navemp.php";
?>
<p style="text-align: center;font-size: 30px;margin-top: 4%;margin-left: 16%"><b><u>Stock Report</u></b></p>

<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$query="select * from totalact";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{
		echo "
		<tr>
		<td>".$result['pur']."</td>
		<td>".$result['sale']."</td>
		<td>".$result['stock']."</td>
		<td>".$result['date']."</td>
		</tr>";
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