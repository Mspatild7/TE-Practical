 <?php
include('connection.php');
 $subname=$_REQUEST['subname'];
$hour=$_REQUEST['hour'];
$min=$_REQUEST['min'];
$sec=$_REQUEST['sec'];
$noque=$_REQUEST['noque'];
$result=$subname.'result';  



$res1="select * from subjects where subject_name='$subname' ";
    $query=mysqli_query($conn,$res1);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
   echo '<script>alert("Already have subject with this name");window.location="admin-panel.php"</script>';
    }
    else
    
    {


 $insert="INSERT INTO subjects(subject_name, hour, min, sec, no_question)
VALUES ('$subname','$hour','$min','$sec','$noque')";




$res1=mysqli_query($conn,$insert);
if($res1)
{
     echo '<script>alert("subject added ");window.location="admin-panel.php"</script>';
}
else
{
    echo '<script>alert("Something went wrong please try again");window.location="admin-panel.php"</script>';
}
    
    $create="CREATE TABLE $subname (
    id int NOT NULL AUTO_INCREMENT,
    question varchar(255),
    option1 varchar(255),
    option2 varchar(255),
   option3 varchar(255),
   option4 varchar(255),
   answer varchar(255),
   PRIMARY KEY (id)
);";

$q=mysqli_query($conn,$create);

$createres="CREATE TABLE $result (
   id int NOT NULL AUTO_INCREMENT,
    student_name varchar(255),
   roll_no varchar(255),
   date varchar(255),
  time varchar(255),
   marks varchar(255),
  PRIMARY KEY (id)
   
);";

$q1=mysqli_query($conn,$createres);
    
    }
?>