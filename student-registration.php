 <?php
include('connection.php');

   $first=$_REQUEST['firstname'];
$middle=$_REQUEST['middlename'];
$last=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$mobno=$_REQUEST['mob'];
$rollno=$_REQUEST['rollno'];

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$cpass=$_REQUEST['cpass'];
$res1="select * from student_registration where Email_id='$email' ";
    $query=mysqli_query($conn,$res1);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
   echo '<script>alert("Account already exist with this email id");window.location="admin-panel.php"</script>';
    }
    else{
       $insert="INSERT INTO student_registration(First_Name, Middle_Name, Last_Name, Email_id, Mob_no, Roll_no, User_id,Password)
VALUES ('$first','$middle','$last','$email','$mobno','$rollno','$user','$pass')";
        $res=mysqli_query($conn,$insert);
      echo '<script>alert("Added");window.location="admin-panel.php"</script>';

    
    }
    
    
    

?>