<?php 
  
  include("connection.php");
  $delete="DELETE FROM student_registration";
    $res=mysqli_query($conn,$delete);
    if($res)
    {
         echo '<script>window.location="admin-panel.php"</script>';
    }

?>