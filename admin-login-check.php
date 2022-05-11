<?php 
session_start();
include('connection.php');
if(isset($_REQUEST["signin"]))
{
    $user=$_REQUEST["username"];
    $pass=$_REQUEST["password"];
     $_SESSION['un']=$user;
    $res="select * from admin where Username='$user' && Password='$pass'";
    $query=mysqli_query($conn,$res);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
         
        echo"<script>alert('Login Successfully');window.location='admin-panel.php'</script>";
    }
    else
    {
        echo "<script>alert('Incorrect UserName Or Password');window.location='admin-login.php'</script>";
    }
}

?>