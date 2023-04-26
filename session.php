<?php
//starting session
session_start();

//if the session for username has not been set, initialise it
if(!isset($_SESSION['user'])){
	$_SESSION['user']="";
}

//save username in the session 
$session_user=$_SESSION['user'];


//if the session for access has not been set, initialise it
if(!isset($_SESSION['access'])){
	$_SESSION['access']="";
}

//save access in the session 
$session_access=$_SESSION['access'];

if(!isset($_SESSION['auth'])){
	$_SESSION['auth']="";
}

$session_auth=$_SESSION['auth'];
?>




