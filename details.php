<?php

$servername="localhost";
$username="root";
$password="";

$dbname="login";
$user=$_POST['email'];
$pass=$_POST['password'];

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die('unable to connect'.$conn->connect_error);
}

$sql="INSERT INTO logindetails(email,password) VALUES('$email','$password')";

if($conn->query($sql)===TRUE){
	include('key.html');
}
else{
	echo"error".$sql."<br>".$conn->error;
}

$conn->close();
?>