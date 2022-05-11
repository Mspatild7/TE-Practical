<?php 
session_start();
include('connection.php');
if(isset($_REQUEST["studentsign"]))
{
    $user=$_REQUEST["user"];
    $pass=$_REQUEST["pass"];
     $_SESSION['stun']=$user;
    $res="select * from student_registration where User_id='$user' && Password='$pass'";
    $query=mysqli_query($conn,$res);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
         
        echo"<script>alert('Login Successfully');window.location='StudDash.php'</script>";
    }
    else
    {
        echo "<script>alert('Incorrect UserName Or Password');window.location='student-login.php'</script>";
    }
}

?>