
 <?php
include('connection.php');
 $subname=$_REQUEST['subname'];
$sub=$_REQUEST['oldsub'];
$hour=$_REQUEST['hour'];
$min=$_REQUEST['min'];
$sec=$_REQUEST['sec'];
$noque=$_REQUEST['noque'];
  $id=$_REQUEST['id'];
$result=$sub.'result';  
$new=$subname.'result';  

$update="Update subjects set subject_name='$subname', hour='$hour', min='$min', sec='$sec', no_question='$noque' where id=$id";
$res1=mysqli_query($conn,$update);
if($res1)
{
     echo '<script>alert("subject updated ");window.location="admin-panel.php"</script>';
}
else
{
    echo '<script>alert("Something went wrong please try again");window.location="admin-panel.php"</script>';
}
    
 $u="RENAME TABLE `quiz`.`$sub` TO `quiz`.`$subname`";
$u1=mysqli_query($conn,$u);
    
$u2="RENAME TABLE `quiz`.`$result` TO `quiz`.`$new`";
$u3=mysqli_query($conn,$u2);
?>
