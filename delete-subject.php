 <?php
include('connection.php');
 $id=$_REQUEST['id'];
$subname=$_REQUEST['subname'];
$result=$subname.'result';  

 $delete="DELETE FROM subjects WHERE id=$id";
$res1=mysqli_query($conn,$delete);
if($res1)
{
     echo '<script>alert("subject deleted ");window.location="admin-panel.php"</script>';
}
else
{
    echo '<script>alert("Something went wrong please try again");window.location="admin-panel.php"</script>';
}
    
    $drop="DROP TABLE `quiz`.`$subname`";
 $d=mysqli_query($conn,$drop);
     $drop1="DROP TABLE `quiz`.`$result`";
 $d1=mysqli_query($conn,$drop1);
    

?>