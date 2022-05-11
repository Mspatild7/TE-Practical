<?php 

$conn=new mysqli('localhost','root','','quiz');
if($conn->connect_error)
    die("connection failed:".$conn->connect_error);
?>