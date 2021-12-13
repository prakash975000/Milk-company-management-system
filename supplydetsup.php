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
<p style="text-align: center;font-size: 30px;margin-top: 4%;margin-left: 15%;"><b><u>Supply Details</u></b></p>
<table border="2" style="width: 60%;text-align: center;margin-top: 5%;margin-left: 29%;">
		<tr>
			 <th>Supply litres</th>
             <th>Advance Received</th>
             <th>Degree/Quality</th>
             <th>Supply date</th>
		</tr>

<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
$query="select * from purchase where username='$p'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{
		echo "
		<tr>
		<td>".$result['litre']."</td>
		<td>".$result['advance']."</td>
		<td>".$result['degree']."</td>
		<td>".$result['date']."</td>
		
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