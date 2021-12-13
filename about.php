<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1><br>
  <p>In this company user has join as supplier or customer of this company.This website is built such a way that it should suits for all type of Milk Distributors in future.</p>
  <p>The website managing daily activities like purchase or sale of milk from various sources. </p>
  <p>Also searching should be very faster so they can find required details instantly.</p>
  <p>The system maintain hundreds of thousands of records.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/empp.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>prakash</h2>
        <p class="title">Admin</p>
        <p></p>
        <p>prakashpv458@gmail.com</p>
        <p><button class="button">Contact:8072229272</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/empp.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>selva</h2>
        <p class="title">Seniour Employee</p>
        <p>selva123@gmail.com</p>
        <p><button class="button">Contact:9578085722</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/empp.png" alt="John" style="width:100%">
      <div class="container">
        <h2>azar</h2>
        <p class="title">Designer</p>
        <p>azar123@gmail.com</p>
        <p><button class="button">Contact:9095873909</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
