<?php 
include("connection.php");
$id=$_REQUEST['id'];
$q="DELETE FROM `student_registration` WHERE `student_registration`.`id` = $id";
$res1=mysqli_query($conn,$q);
if($res1)
{
    echo "<script>alert('Data is Deleted Successfully..');window.location='admin-panel.php'</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='admin-panel.php'</script>";
}
?>