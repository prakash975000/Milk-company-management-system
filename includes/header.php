<!DOCTYPE html>
<html>
<style>

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
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
.header a {
  text-decoration: none;
  padding: 10px;
  float: right;
  color:white;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;  
}

.header a:hover {
  color:cyan;
}
</style>
<head>
</head>

<body>
<div class="header" >     
  <a href=".php">&nbsp &nbsp</a>
  <a href="about.php">About</a>
	<a href="logincus.php">Customer</a>
	<a href="loginsup.php">Supplier</a>
	<a href="loginemp.php">Employee</a>
	<a href="index.php">Home</a>
</div>

</body>
</html>