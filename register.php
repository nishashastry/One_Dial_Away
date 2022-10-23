<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<header>
  <title>1DialAway</title>
  <link rel="stylesheet" type="text/css" href="registerstyle.css">
</header>

	
<body>
<link rel="stylesheet" href="indexstyle.css">
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">&#9776;</button>
    <div class="dropdown-content">
	  <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="map.php">map</a>
      <a href="setting.php">setting</a>
    </div>
  </div> 
  <h3> 1dialaway </h3>
</div>
	
  <div class="header">register</div>
 
  <form method="post" action="server.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>phone number</label>
  	  <input type="tel" name="tel" value="<?php echo $tel; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		 <a href="index.php">Already have an account?</a>
  	</p>
  </form>
</body>
</html>