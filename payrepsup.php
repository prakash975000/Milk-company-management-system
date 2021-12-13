<!DOCTYPE html>
<html>
<head>
    <title>payment report</title>
    <style>
    	

    </style>

</head>
<body style="background-image: url(images/66773.jpg);">

<?php

include "includes/headersup.php";
include "navsup.php";

?>
<p style="text-align: center;font-size: 30px;margin-top: 4%;margin-left: 15%;"><b><u>Payment Report</u></b></p>
<table border="2" style="width: 60%;text-align: center;margin-top: 5%;margin-left: 29%;">
		<tr>
			 <th>Payment date</th>
             <th>Payment Method</th>
             <th>Number of litre in duration</th>
             <th>Amount</th>
             <th>Pay From</th>
             <th>Pay To</th>
             <th>Payment Status</th>
		</tr>

<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$query="select * from payment where Username='$p' and pay='supplier'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{
		echo "
		<tr>
		<td>".$result['payd']."</td>
		<td>".$result['pmethod']."</td>
		<td>".$result['amtlit']."</td>
		<td>".$result['amt']."</td>
		<td> ".$result['payf']." </td>
		<td> ".$result['payt']." </td>
		<td>".$result['ptype']."</td>
		</tr>";
	}
}
else
{
	 ?> <p style="color: red;margin-left: 52%;margin-top: 10px">*No records found</p><?php
}
?>
</table>
</body>
</html>