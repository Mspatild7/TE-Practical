<?php 
  
  include("connection.php");
$sname=$_REQUEST['sname'];
  $delete="DELETE FROM $sname";
    $res=mysqli_query($conn,$delete);
    if($res)
    {
         echo '<script>alert("All Questions Deleted ");window.location="admin-panel.php"</script>';
    }

?>