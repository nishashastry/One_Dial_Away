<!DOCTYPE html>
<html>
<header>
<title>1dialaway</title>
</header>

<body>
<link rel="stylesheet" href="setting.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">&#9776;</button>
    <div class="dropdown-content">
	  <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="setting.php">setting</a>
    </div>
  </div> 
  <a> 1dialaway </a>
</div>

<div class="card">
  <div class="container">
    <h4><b>account</b></h4>
	<p>username: <?php session_start(); echo $_SESSION['username'] ?></p> 
	<p>password: </p>
	<p>phone number: </p> 
	<button>log out</button> 
  </div>
</div>

<div class="card">
  <div class="container">
    <h4><b>my call</b></h4>
	<?php
		$sql_query="SELECT * FROM user WHERE username='$username'";
		$result=mysqli_query($db,$sql_query);
		
		echo"<table class='styled-table table-hover'>
			<thead>
			<tr>
			<td>questions</td>
			</tr>
			</thead>
			<tbody>";
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>
					<td>".$row['questions']."</td>
					</tr>";
				}?>
	<button onclick="">edit</button>
  </div>
</div>

</body>

</html>