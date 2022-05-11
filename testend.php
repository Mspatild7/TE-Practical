<?php 
include('student-login-check.php');
include("connection.php");
$user=$_SESSION['stun'];
$result1=mysqli_query($conn,"select * from student_registration where User_id='$user'");
 $res1=mysqli_fetch_array($result1);

?>
<html>
<head>
<title></title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">

    <style>
body{
    background-color:#FFCB90;
    font-family: 'PT Sans Narrow', sans-serif;
}
.quizzy{
    color:orange;
    text-align: center;
    background-image: linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.7));
    background-size:cover;      
    padding:0.1rem;

}
h1{ 
    font-size:3rem;
    text-align:center;
}
h2{
    margin-top:-1.5%;
    padding-bottom:1%;
    color:white;
 }
 .detail {
    margin-top:3%;
    margin-left:40%;
    font-size:1.2rem;
    color:black;
 }
 #det,#det1{
    color:black;
    margin-bottom:1%;
 }
h5
{
    color:#34656d;
    font-size: 3rem;
    font-family: 'PT Sans Narrow', sans-serif;
    margin-top: 2%;
    margin-left: 0%;
    font-weight:bold;
}
h6
{
    color: #34656d;
    font-size: 2rem;
    font-family: 'PT Sans Narrow', sans-serif;
    margin-top: -4%;
    margin-right:1%;
    text-align:center;
    font-weight:bold;
}
input[type='submit']
{
   height: 50px;
   width: 12%;
   border:  solid black;
   font-size: 1.8rem;
   font-weight: bold;
   cursor: pointer;
   font-family: 'PT Sans Narrow', sans-serif;
   border-radius: 15px;
   margin-top: -4%;
   background-color: transparent;
   color: #40394a;
   margin-left: 43.5%;
}
input[type='submit']:hover
{
   background-color: none;
   color:#e84545;
   border:  solid #e84545;
   transform:scale(1.1)
}
    </style>
    </head>
    <body>
    <div class="quizzy">
        <h1>QUIZZY</h1>
        <h2>Unlocking Knowledge At The Speed Of Thoughts</h2>
    </div>
    <div class="detail" >
   
        <h2 id="det">Name : <?php echo $res1['First_Name'].' '.$res1['Middle_Name'].' '.$res1['Last_Name']?></h2>
        <h2 id="det">Email Id : <?php echo $res1['Email_id']?></h2>
       
    </div>
            <h5>------------------------------------ You successfully Completed Quiz -----------------------------------</h5>
            <h6>Click Below and Submit The Quiz!</h6>
            <h6>⬇⬇⬇</h6>
         <form method="post" action="sub-res.php" >
                    <input type="hidden" name="date" id="date">
                    <input type="hidden" name="time" id="time">
                    <input type="hidden" name="mark" id="mark">
               <input type="hidden" name="subres" id="subres">
                    <input type="submit" id="submit" value="Submit">
            </form>
            
        <script>
          
           var mark=localStorage.getItem('mark');
            var date=localStorage.getItem('date');
            var time=localStorage.getItem('time');
             var subres=localStorage.getItem('subres');
            document.getElementById('mark').value=mark;
             document.getElementById('date').value=date;
             document.getElementById('time').value=time;
             document.getElementById('subres').value=subres;
            document.getElementById('det1').innerHTML=subres;
            
           
        </script>   
          
        
        
       </div>
       <script>
            window.onload=function()
            {
                document.addEventListener("contextmenu",function(e){e.preventDefault();},false);
            }
               function preback()
            {
                window.history.forward();
            }
          setTimeout("preback()",0);
            window.onunload=function(){null};
           
        </script> 
    <script type="text/javascript" language="javascript">
window.history.forward(1);
document.attachEvent("onkeydown", my_onkeydown_handler);
function my_onkeydown_handler()
{
switch (event.keyCode)
{
case 116 : // F5;
event.returnValue = false;
event.keyCode = 0;
window.status = "We have disabled F5";
break;
}
}
</script>
    </body>
</html>