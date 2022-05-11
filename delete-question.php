 <?php
include('connection.php');
 $id=$_REQUEST['id'];
$name=$_REQUEST['name'];


 $delete="DELETE FROM $name WHERE id=$id";
$res1=mysqli_query($conn,$delete);
if($res1)
{
     echo '<script>alert("question deleted ");window.location="admin-panel.php"</script>';
}
else
{
    echo '<script>alert("Something went wrong please try again");window.location="admin-panel.php"</script>';
}
   
?>