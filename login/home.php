<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img src="nexus-integra-blog-2.png" alt="smart" style="width:100%;
position:fixed;
z-index:-1;">
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a><br>
     <a href="">EXPLORE THE WORLD</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>