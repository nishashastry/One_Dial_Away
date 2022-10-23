<!DOCTYPE html>
<header>
<title>1dialaway</title>
</header>

<body>
<link rel="stylesheet" href="indexstyle.css">
<link rel="stylesheet" href="login.css">
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

<form method='post' action='server.php'>
	<h1>Login</h1>
		<div class='input-group'>
			<label>Username</label>
			<input type='text' name='username'required >
		</div>
		<div class='input-group'>
			<label>Password</label>
			<input type='password' name='password' required>
		</div>	
		<div class='input-group'>
			<button type='submit' class='btn' name='login_user'>Login</button>
		</div>
		
		<a href="register.php">create account</a>
</form>
</body>
