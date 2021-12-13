<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<style>

.dropdown {
  margin-left: 88%;
  overflow: hidden;
 }

.dropdown .dropbtn {
  font-size: 18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  color: cyan;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  color: cyan;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.header {
  background-color: black;
  overflow: hidden;
  padding: 20px 20px;
  height: 40px;
  width: 100%;
  margin: 0;
}

</style>
<body style="background-image: url(images/66773.jpg);">
   <?php
      include "session.php";
  ?>
<div class="header"> 
  <div class="dropdown"> 
    <button class="dropbtn"><b><i class="fas fa-user-circle" style="color:white;font-size: 20px;"></i>&nbsp<i><?php echo $p ?></i>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b><br></button>
    <div class="dropdown-content">
      <a href="supprofile.php">Profile</a>
      <a href="logincus.php">Logout</a>
    
    </div>
  </div>         
</div>
</body>
</html>