<?php 
include('../Model/server.php');
if (isset($_POST['reg_user']))
{
   //Getting the inputs thorugh post method
   $name = ($_POST["name"]);
   $email = ($_POST["email"]);
   $password = ($_POST["password_1"]);
   $country = ($_POST["country"]);
   registration($name, $email, $password, $country);

}

?>