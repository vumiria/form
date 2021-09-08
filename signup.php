<?php

$con= mysqli_connect('localhost','root','','form3');
if ($con) {
	// code...
	echo "done";
}
else
{
	echo "doesn't";
}

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$user_name = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO sign_ups(first_name,last_name,email,user_name,password) VALUES ('$first_name','$last_name','$email','$user_name','$password')";

if(mysqli_query($con, $sql)=== true)
{
	echo "connection was done";
}
else
{
	echo "connection fail" .$con->error;
}

?>