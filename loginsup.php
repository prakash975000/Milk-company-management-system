
<!DOCTYPE html>
<html>
<head>
  <title>Supplier login and registration form</title>
    <link rel="stylesheet"  href="css/style1.css">
</head>
<body>
<?php 
       include "includes/header.php"
?>
  <div class="hero">
    <div style="border-radius: 70px" class="form-box">
      <div>
          
          <p style="text-align: center;font-weight: 20px;font-size: 30px;">Supplier</p>
        </div>
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>


      </div>
      <form id="login" class="input-group" action="loginsupconn.php" method="post" >
        <input type="text" name="us" class="input-field" placeholder="User Id" required="">
        <input type="password" name="pw"class="input-field" placeholder="Password" required="">
        <input type="checkbox" class="checkbox"><span>Remember password</span>
        <button type="submit" name="log" class="submit-btn" value="login">Log In</button>
      </form>
      
      <form id="register" class="input-group1" action="supconn.php" method="POST">

      <input type="text" name="username" class="input-field"  required="" placeholder="Username (ex:sup1,sup2..,etc.)">

      <input type="text" name="name" class="input-field"  required="" placeholder="Supplier name">

      <input type="text" name="address" class="input-field"  required="" placeholder="Address">

      <input type="text" name="phno" class="input-field"  required=""placeholder="Phone number">

      <input type="email" name="email" class="input-field"  required=""placeholder="Email id">

      <input type="password" id="ps" name="passwd" class="input-field"  required="" placeholder="Password" onchange='check_pass();'>

      <input type="password" id="cps" name="cpasswd" class="input-field"  required="" placeholder="Confirm Password" onchange='check_pass();'><br><br>

      

        <button id="submit" type="submit" name="signin" value="signin" class="submit-btn1" disabled/>Register</button>
        <button type="reset" name="reset" value="reset" class="submit-btn1">reset</button>

    </form>
    </div>
  </div>
  <script type="text/javascript">
        function check_pass(){
          if(document.getElementById('ps').value == document.getElementById('cps').value)
          {
            document.getElementById('submit').disabled = false;
          }
          else
          {
            document.getElementById('submit').disabled = true;
          }

        }
        
        </script>
<script >
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");

  function register(){
    x.style.left = "-400px"
    y.style.left = "50px"
    z.style.left = "110px"
  }
  function login(){
    x.style.left = "50px"
    y.style.left = "450px"
    z.style.left = "0"
  }
</script>

</body>
</html>