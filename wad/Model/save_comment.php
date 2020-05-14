<?php
$link = mysqli_connect("studmysql01.fhict.local","dbi435688","webhosting54","dbi435688");

$name = mysqli_real_escape_string($link,$_POST['name']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$comment = mysqli_real_escape_string($link,$_POST['comment']);
$tId = mysqli_real_escape_string($link,$_POST['tId']);;

$q = "INSERT INTO comm (name,email,comment,tId) VALUES('$name','$email','$comment','$tId')";
mysqli_query($link,$q);
?>