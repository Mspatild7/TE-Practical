<?php 
include("student-login-check.php");
$date=$_REQUEST['date'];
$time=$_REQUEST['time'];
$mark=$_REQUEST['mark'];
$stun=$_SESSION['stun'];
$subres=$_REQUEST['subres'];


include("connection.php");



$query="select * from student_registration where User_id='$stun'";
$result=mysqli_query($conn,$query);
 $res=mysqli_fetch_array($result);

    $first=$res['First_Name'];
    $middle=$res['Middle_Name'];
    $last=$res['Last_Name'];
     $roll=$res['Roll_no'];
     $stname=$first.' '.$middle.' '.$last;

     $stmt=$conn->prepare("insert into $subres(student_name,roll_no,date,time,marks) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$stname,$roll,$date,$time,$mark);
    $stmt->execute();
    echo "<script>alert('Exam ended successfully...');window.location='StudDash.php'</script>";
    $stmt->close();
    $conn->close();
?>