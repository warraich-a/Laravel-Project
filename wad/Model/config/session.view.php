<?php

session_start();

if(!isset($_SESSION['email'])){
	$directory = dirname($_SERVER["PHP_SELF"]);
	$path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$path .=$_SERVER["SERVER_NAME"]. $directory;        
	
	$link = $path."/login.php";

	// $absolute_path = realpath("$link");
	// Include URL for Login page to login again.
	header("Location: $link");;
}

?>