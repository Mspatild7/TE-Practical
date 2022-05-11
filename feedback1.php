 <?php
include('connection.php');
$name=$_REQUEST['txt1'];
$email=$_REQUEST['txt2'];
$mob=$_REQUEST['txt3'];
$comment=$_REQUEST['txt4'];

       $insert="INSERT INTO feedback(student_name,email,mob,comment)
VALUES ('$name','$email','$mob','$comment')";
        $res=mysqli_query($conn,$insert);
      echo '<script>alert("Feedback Sent");window.location="StudDash.php"</script>';

    
  
    
    

?>