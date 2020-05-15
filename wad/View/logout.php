<?php

session_start();

unset($_SESSION['userId']);
unset($_SESSION['email']);
unset($_SESSION['remember_me']);
unset($_SESSION['uid']);

session_destroy();
header("Location:login.php");

?>
