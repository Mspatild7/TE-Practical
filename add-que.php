 <?php
include('connection.php');
$sub=$_REQUEST['sub'];
$question=$_REQUEST['question'];
$optiona=$_REQUEST['optiona'];
$optionb=$_REQUEST['optionb'];
$optionc=$_REQUEST['optionc'];
$optiond=$_REQUEST['optiond'];
$answer=$_REQUEST['answer'];


$insert="INSERT INTO `$sub`(question, option1, option2, option3, option4, answer)
VALUES ('$question','$optiona','$optionb','$optionc','$optiond','$answer')";




$res1=mysqli_query($conn,$insert);
if($res1)
{
     echo " Question added to $sub ";
    
}
else
{
    echo 'Something went wrong please try again';
}

?>