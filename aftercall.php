<!DOCTYPE html>
<html>
<header>
<title>1dialaway</title>
</header>

<body>
<link rel="stylesheet" href="indexstyle.css">
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">&#9776;</button>
    <div class="dropdown-content">
	  <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="setting.php">setting</a>
    </div>
  </div> 
  <h3> 1dialaway </h3>
</div>

<form method='post' action='aftercallpost.php'>
	<label for="location"> location</label>
	<input type="text" id="location" name="location"><br>
	<label for="situation"> situation</label>
	<input type="text" id="situation" name="situation" style="height:100px"><br>
	<input type="submit">
</form>

</div>

</body>
</html>