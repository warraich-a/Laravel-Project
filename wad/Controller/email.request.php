<?php 

include('../Model/server.php');

if (isset($_POST['SendMail'])) 
	{
    $email = $_POST["emailToUse"];
    SendEmailForForgotPassword($email);
}

?>