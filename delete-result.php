 <?php
include('connection.php');
 $id=$_REQUEST['id'];
$subname=$_REQUEST['subname'];


 $delete="DELETE FROM $subname WHERE id=$id";
$res1=mysqli_query($conn,$delete);
if($res1)
{
     echo '<script>alert("student result deleted ");window.location="admin-panel.php"</script>';
}
else
{
    echo '<script>alert("Something went wrong please try again");window.location="admin-panel.php"</script>';
}
   
?>