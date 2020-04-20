<?php

$conn = mysqli_connect('localhost','root', '','commentsection');

if(!$conn){
    die("conn field".mysqli_connect_error());
}