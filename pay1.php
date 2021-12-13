<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/submit.css">
  <style> 
.txt{
  width:700px;
  height:700px;
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
  font-size: 15px;
  padding: 2px;
}
</style>
</head>
<body >

	<?php 
      include "includes/headeremp.php";
      include "navemp.php";
	 ?>
	 
<form action="payconn.php" class="txt" method="POST" style="font-size: 20px;margin-top: 2%"><br>

<p style="text-align: center;font-size: 30px;margin-top: 5%;"><b>Payment details</b></p><br><br>

<div class="form-element">
<label> &nbsp &nbsp &nbsp Payment Duration &nbsp &nbsp </label>&nbsp
<input type="date" name="payf"  value="<?php echo $_POST['payf'] ?>" style="width: 20.3%;height: 18px;" class="inp">

<label> - </label>
<input type="date" name="payt"  value="<?php echo $_POST['payt'] ?>" style="width: 20.3%;height: 18px;" class="inp">
</div>  

<div class="form-element">
<label>Payments &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>&nbsp
  <input type="text" name="pay"  value="<?php echo $_POST['pay'] ?>" style="width: 20.3%;" class="inp">
</div>
<div class="form-element">
<label>User Id &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp</label>&nbsp
<input type="text" name="Username"  value="<?php echo $_POST['Username'] ?>" placeholder="Cus id/Sup id" style="width: 20.3%;height: 18px;" class="inp">
</div>
<div class="form-element">
<label>Payment paid/received  &nbsp &nbsp &nbsp</label>&nbsp
  <input type="text" name="ptype"  value="<?php echo $_POST['ptype'] ?>" style="width: 20.5%;height: 18px;" class="inp">
</div>
<div class="form-element">
<label>Payment Method &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>&nbsp
  <input type="text" name="pmethod"  value="<?php echo $_POST['pmethod'] ?>" style="width: 20.5%;height: 18px;" class="inp">
</div>
<div class="form-element">
<label>Payment paid date &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp</label>&nbsp
<input type="date" name="payd"  value="<?php echo $_POST['payd'] ?>" style="width: 20.5%;height: 18px;" class="inp">
</div>
<?php
$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");

if(isset($_POST['pay']))
{
  $pay=$_POST['pay'];
  $Username=$_POST['Username'];
  $payf=$_POST['payf'];
  $payt=$_POST['payt'];
  

  if($pay == 'supplier')
  {
      $sql="select sum(litre) as total,sum(advance) as ads from purchase where username='$Username' && date between '$payf' and '$payt' ";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result))
      { 
         $p = $row['total'];
         $r = $row['ads'];
         ?>
          <div class="form-element">
          <label>Number of litre in duration </label>
          <input type="text" name="amtlit" value="<?php echo @$p ?>" style="width: 20.5%;height: 18px;" class="inp">&nbsp
          </div>
          <div class="form-element">
          <label>Total advance in duration&nbsp &nbsp</label>
          <input type="text" name="totad" value="<?php echo @$r ?>" style="width:  20.5%;height: 18px;" class="inp">&nbsp
          </div>
          <div class="form-element">
          <label>Paid Amount(Rs.) &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp</label>
          <input type="text" name="amt"  value="<?php echo @$p*28-$r ?>" style="width:  20.5%;height: 18px;" class="inp">&nbsp
          </div><br><br>
         <?php
      }
  }
  if($pay == 'customer')
  {
      $sql="select sum(litre) as total,sum(advance) as ads from sale where username='$Username' && date between '$payf' and '$payt' ";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result))
      { 
         $p = $row['total'];
         $r = $row['ads'];
         $a = $p-$r;
         ?>
          <div class="form-element">
          <label>Number of litre in duration </label>
          <input type="text" name="amtlit"  value="<?php echo @$p ?>" style="width:  20.5%;height: 17px;" class="inp">&nbsp
          </div>
          <div class="form-element">
          <label>Total advance in duration&nbsp &nbsp</label>
          <input type="text" name="totad" value="<?php echo @$r ?>" style="width: 20.5%;height: 17px;" class="inp">&nbsp
          </div>

          <div class="form-element">
          <label>Received Amount(Rs.)&nbsp &nbsp &nbsp &nbsp &nbsp </label>
          <input type="text" name="amt" value="<?php echo @$p*40-$r ?>" style="width:  20.5%;height: 17px;" class="inp">&nbsp
          </div><br>
         <?php
      }
  }
}
    ?>

  <button type="submit" name="submit" class="su" value="submit" style="margin-left: -1%;padding: 10px">Submit</button>
  <button type="reset" name="reset" class="su" value="reset" style="margin-left: 1%;padding: 10px">reset</button>
  <button type="update" name="update" class="su" value="update" style="margin-left: 1.5%;padding: 10px">update </button>
</div>
</form>
</body>
</html>