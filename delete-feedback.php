 <?php
include('connection.php');
 

 $delete="DELETE FROM feedback";
$res1=mysqli_query($conn,$delete);
if($res1)
{
     echo '<script>alert("All Feedback deleted ");window.location="admin-panel.php"</script>';
}
else
{
    echo '<script>alert("Something went wrong please try again");window.location="admin-panel.php"</script>';
}
   
?>