<!DOCTYPE html>
<html>
<header>
<title>1dialaway</title>
</header>

<body>
<?php
if ($_SESSION['login'] == 1) {
    header('location: call.php');
}else {
    header('location: login.php');
}?>

</body>
</html>