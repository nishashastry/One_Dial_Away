<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: 'Poppins', sans-serif;
}

.navbar {
  display: flex;
  overflow: hidden;
  background-color: white;
}

.navbar a {
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>

<body>

<div class="navbar">
  <h3> 1dialaway </h3>
  <div class="dropdown">
    <button class="dropbtn">&#9776; 
      
    </button>
    <div class="dropdown-content">
      <a href="about.php">about</a>
      <a href="map.php">map</a>
      <a href="setting.php">setting</a>
    </div>
  </div> 
</div>

<div class="container">
  <a href="login.php" class="myButton">call for help</a>
</div>



</body>
</html>

