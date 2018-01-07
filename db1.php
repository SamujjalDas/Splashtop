<?php 
global $con;
$con=mysqli_connect("localhost","splashtop","00]a9A&cGW_o","splashto_sp1");
if($con)
	echo "DATABASE CONNECTED";
else
	echo "Error";
?>