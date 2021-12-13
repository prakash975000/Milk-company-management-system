<!DOCTYPE html>
<html>
<head>
    <title>purchase report</title>
    <link rel="stylesheet" type="text/css" href="css/submit.css">
    <style>
    .inp{
    	border-radius: 10px;
  font-size: 12px;
  padding: 2px;
    }
    </style>

</head>
<body style="background-image: url(images/66773.jpg);">

<?php

include "includes/headercus.php";
include "navcus.php";

?>
<p style="text-align: center;font-size: 30px;margin-top: 4%;margin-left: 15%;"><b><u>Purchase Report</u></b></p>
<form action="" class="txt" method="POST" >
<div class="form-element" style="font-size: 20px;margin-top: 2%;text-align: center;margin-left: 60%;">
<label>Duration : </label>
<input type="date" name="payf"  class="inp">
<label> - </label>
<input type="date" name="payt"  class="inp">
<button name="search" class="su">Search</button>
</div> 

<table border="2" style="width: 30%;text-align: center;margin-top: 2%;margin-left: 43%;">
		<tr>
			 <th>Total Purchased litres</th>
             <th>Total advance paid</th>
        </tr>     
            
<?php

$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");

if(isset($_POST['search']))
{
	$f=$_POST['payf'];
	$t=$_POST['payt'];
	$query="select sum(litre) as lit,sum(advance) as adv,date from sale where username='$p' && date between '$f' and '$t'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
		while ($result=mysqli_fetch_assoc($data)) 
		{
			echo "
			<tr>
			<td>".$result['lit']."</td>
			<td>".$result['adv']."</td>
			
			</tr>";
		}
	}
}
else
{
	 ?> <p style="color: red;margin-left: 52%;margin-top: 10px">*No records found</p><?php
}
?>
</table>
</form>
</body>
</html>