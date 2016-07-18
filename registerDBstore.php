<?php
// Create connection
$con=mysqli_connect("localhost","root","","cctbm");
// Check connection
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$first = mysqli_real_escape_string($con, $_POST['firstname']);
$last= mysqli_real_escape_string($con, $_POST['lastname']);
$user = mysqli_real_escape_string($con, $_POST['username']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$sex = mysqli_real_escape_string($con, $_POST['sex']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$mobile =mysqli_real_escape_string($con, $_POST['mobileno']);
$city = mysqli_real_escape_string($con, $_POST['cityname']);
$state = mysqli_real_escape_string($con, $_POST['statename']);
$sql="INSERT INTO register VALUES ('$first','$last','$user','$pass','$sex','$dob','$mobile','$city','$state')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header("Location: budoff.html");
mysqli_close($con);
?>