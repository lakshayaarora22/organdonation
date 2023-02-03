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
$type=$_POST['type'];
$appointment=$_POST['appointment'];
$organ="Intestine";
$sql = "INSERT INTO `appointment`(`name`, `number`,`type`,`appointment`,`organ`) VALUES ('$name','$number','$type','$appointment','$organ')";
mysqli_query($con,$sql);
echo "<br>";
header('Location: thankyou.html');
?>