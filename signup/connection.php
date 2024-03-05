<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
   // echo "connection is eastablished";
}
else {
    //echo "error connection failed";
}
mysqli_select_db($connection,'test_db');
$username = $_POST['user_name'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$data = "INSERT INTO `users` (`user_name`, `password`, `name`, `email`, `phone`) VALUES ('$username', '$password', '$name', '$email', '$phone');";
mysqli_query($connection,$data);
header('location:ss.php');
    if (mysqli_query) {
        echo "signup successfull!!";
    }
        else{
           echo "something went wrong!";
        }
    
?>