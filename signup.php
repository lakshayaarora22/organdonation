<?php
$server = "localhost:8809";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password,"organdonation" );
if(mysqli_connect_errno())
{
      die("connection to this database failed due to".mysqli_connect_error()); 
}
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "INSERT INTO `organdonation`(`name`, `number`,`email`,`password`) VALUES ('$name','$number','$email','$password')";
mysqli_query($con,$sql);
echo "<br>";
header('Location: successful.html');
?>