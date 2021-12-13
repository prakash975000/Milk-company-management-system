<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/submit.css">
  <style> 
.txt{
  width:700px;
  height:560px;
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
	 
<form action="pay1.php" class="txt" method="POST"><br>
  <p style="text-align: center;font-size: 30px;margin-top: 5%;"><b><u>Payment details</u></b></p>
  <div style="text-align: center;font-size: 20px;margin-top: 5%">

<div class="form-element">
<label> &nbsp &nbsp &nbsp Payment Duration &nbsp &nbsp </label>
<input type="date" name="payf" style="width: 19.7%;height: 18px;" class="inp" required="">

<label> - </label>
<input type="date" name="payt" style="width: 19.7%;height: 18px;" class="inp" required="">
</div>  

<div class="form-element">
<label>Payments &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
  <select type="text" name="pay" style="width: 20.5%;" class="inp" required="">
    <option value="0"></option>
    <option value="supplier">To supplier</option>
    <option value="customer">From customer</option>
  </select> 
</div>
<div class="form-element">
<label>User Id &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type="text" name="Username" placeholder="Cus id/Sup id" style="width: 19.5%;height: 18px;" class="inp" required="">
</div>
<div class="form-element">
<label>Payment paid/received  &nbsp &nbsp&nbsp&nbsp</label>
  <select type="text" name="ptype" style="width: 20.5%;height: 25px;" required="" class="inp"> 
    <option value="0"></option>
    <option value="paid">Paid</option>
    <option value="Received">Received</option>
  </select>
</div>
<div class="form-element">
<label>Payment Method &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
  <select type="text" name="pmethod"  style="width: 20.5%;height: 25px;" required="" class="inp">
    <option value="0"></option>
    <option value="cash">cash</option>
    <option value="upi">upi</option>
     <option value="bank Transfer">Bank Transfer</option>
  </select>
</div>
<div class="form-element">
<label>Payment paid date &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp</label>
<input type="date" name="payd" style="width: 19.7%;height: 18px;" required="" class="inp">
</div>

<br><br>
<div>
  <button type="submit" name="cal" class="su" value="submit" style="margin-left: -1%;padding: 10px">Next</button>
  <button type="reset" name="reset" class="su" value="reset" style="margin-left: 1%;padding: 10px">reset</button> 
</div>
</div>
</form>
</body>
</html>