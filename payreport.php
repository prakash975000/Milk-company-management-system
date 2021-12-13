<!DOCTYPE html>
<html>
<head>
    <title>payment report</title>

</head>
<body style="background-image: url(images/66773.jpg);">
	<table border="2" style="width: 60%;text-align: center;margin-top: 4%;margin-left: 28%;">
		<tr style="height: 35px">
             <th>Payment</th>
             <th>User id</th>
             <th>Payment Status</th>
             <th>Payment Method</th>
             <th>Number of litre in duration</th>
             <th>Amount</th>
             <th>Pay From</th>
             <th>Pay To</th>
		</tr>

	

<?php
include "includes/headeremp.php";
include "navemp.php";
?>
<p style="text-align: center;font-size: 30px;margin-top: 4%;margin-left: 16%"><b><u>Payment Report</u></b></p>

<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$query="select * from payment";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{
		echo "
		<tr>
		<td>".$result['pay']."</td>
		<td>".$result['Username']."</td>
		<td>".$result['ptype']."</td>
		<td>".$result['pmethod']."</td>
		<td>".$result['amtlit']."</td>
		<td>".$result['amt']."</td>
		<td> ".$result['payf']." </td>
		<td> ".$result['payt']." </td>
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