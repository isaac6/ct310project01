<?php
session_start();


if(!isset($_SESSION['username']))
	echo "You must log in to view this page. login <a href='login.php'>here</a>";
else {

$username = $_SESSION['username'];
$id = $_SESSION['id'];

echo "Welcome ".$username." Your ID is ".$id;
echo " Click <a href='logout.php'>here</a> to logout.";

}
?>