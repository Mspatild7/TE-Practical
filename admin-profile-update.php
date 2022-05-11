<?php 
include("connection.php");
if(isset($_POST['sub'])) 
{
    $name=$_REQUEST['name'];
    $post=$_REQUEST['post'];
    $update="Update admin set Name='$name', post='$post'";
    $res1=mysqli_query($conn,$update);
if($res1)
{
    echo "<script>alert('Profile Updated');window.location='admin-panel.php';</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='admin-panel.php';</script>";
}
}
?>