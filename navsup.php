<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script type="text/javascript">
		function togglemenu()
		{
			document.getElementById('sidebar').classList.toggle('active');
		}

	</script>
	<style>


.dropdown1 {
  float: right;
  overflow: hidden;
}

.dropdown1 .dropbtn1 {
  font-size: 18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown1:hover .dropbtn1 {
  color: cyan;
}

.dropdown-content1 {
  float: left;
  display: none;
  position: absolute;
  background-color:black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  float: left;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content1 a:hover {
  background-color: grey;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
}
</style>

</head>
<body>
	<div id="sidebar" onclick="togglemenu()">
		<div class="toggle-btn">

		<span></span>
		<span></span>
		<span></span>
	    </div>
	   <ul>
        <li><a href="supdir.php">Home</a></li>
	   	<li><a href="supplydetsup.php">Supply details</a></li>
      <<li><a href="empretsu.php">Employee details</a></li>
	   	<div class="dropdown1"><br>
    <button class="dropbtn1"><b>Reports</b>
      <i class="fa fa-caret-down"></i>
    </button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <div class="dropdown-content1"><b>
     <a href="supplyrepsup.php">Supply report</a><br>
     <a href="payrepsup.php">Payment report</a><br>
    </div>
  </div>   
	   </ul>
	</div>

</body>
</html>