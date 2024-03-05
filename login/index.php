<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img src="smart-city-trans-feature_1200x675_hero_012320-animated.gif" alt="smart" style="width:100%;
position:absolute;
z-index:-1;">
     <form action="login.php" method="post">
     	<h2>WELCOME TO THE SMART WORLD</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>