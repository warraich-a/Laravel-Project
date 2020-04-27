<?php 

include("../Model/server.php");

    if (isset($_POST['login_user'])) 
	{
        $email = $_POST["email"];
        $password_login = $_POST["password_login"];
        login($email, $password_login);
    } 
?>