 <?php
include('connection.php');
 $id=$_REQUEST['id'];
   $first=$_REQUEST['first'];
$middle=$_REQUEST['middle'];
$last=$_REQUEST['last'];
$email=$_REQUEST['email'];
$mobno=$_REQUEST['mob'];
$rollno=$_REQUEST['roll'];

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$res="UPDATE `student_registration` SET `First_Name`='$first',`Middle_Name`='$middle',`Last_Name`='$last',`Email_id`='$email',`Mob_no`='$mobno',`Roll_no`='$rollno',`User_id`='$user',`Password`='$pass' where id=$id";
$res1=mysqli_query($conn,$res);
if($res1)
{
     echo '<script>alert("Updated Successfully");window.location="admin-panel.php"</script>';
}
else
{
    echo '<script>alert("Something went wrong please try again");window.location="admin-panel.php"</script>';
}
    
    
    

?>