<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
include('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbllogin where username='$username' and password='$password'";
$qry = $con->query($sql);
 
if ($qry->fetchColumn() > 0) 
{
	$_SESSION['user'] = $username;
	header('location:home.php');
	exit();
}	
else
{
	header("Location: index.php?msg=1");
}
?>