<!DOCTYPE html>
<html>
<head>
    <title>customer report</title>
    <link rel="stylesheet" type="text/css" href="css/submit.css">
</head>
<body style="background-image: url(images/66773.jpg);">

	<table border="2" style="width: 40%;text-align: center;margin-top: 4%;margin-left: 37%;">
		<tr style="height: 35px">
             <th> Username </th>
             <th> Total Litre Sold</th>
             <th> Rceived Advance </th>
             <th> Sold Date </th>
		</tr>

	

<?php
include "includes/headeremp.php";
include "navemp.php";
?>
<form action="" method="POST">
<input type="text" name="searcht"   id="myText" placeholder="Enter customer id" style="text-align: center;margin-top: 2%;margin-left: 75%;padding: 10px;height: 10px;border-radius: 10px;">&nbsp
<button name="search" class="su" style="">Search</button>
</form>
<p style="text-align: center;font-size: 30px;margin-top: 2%;margin-left: 12%"><b><u>Customer Report</u></b></p>
<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");

if(isset($_POST['search']))
{
	$id=$_POST['searcht'];
	$query="select * from sale where username='$id'";
	$query_run=mysqli_query($conn,$query);

		while ($row=mysqli_fetch_array($query_run)) 
		{
			echo "
			<tr>
			<td>".$row['username']."</td>
			<td>".$row['litre']."</td>
			<td>".$row['advance']."</td>
			<td> ".$row['date']." </td>
			</tr>";
		}
}
elseif(empty($_POST['search']))
{
	$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
	$query="select * from sale";
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