<?php 
include('connection.php');
include('student-login-check.php');
$stuser=$_SESSION['stun'];
$select="select * from student_registration where User_id='$stuser'";
$res1=mysqli_query($conn,$select);
$res=mysqli_fetch_array($res1);
$first=$res['First_Name'];
  $middle=$res['Middle_Name']; 
$last=$res['Last_Name'];
$email=$res['Email_id'];
$mob=$res['Mob_no'];
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Student Panel</title>
      <link rel="icon" href="css/img/favicon.jpg" type="jpg">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.7.0/css/fontawesome.min.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--Style Sheet-->

    <style>
      *{
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;   
        
      }
      body{
        min-height: 100vh;
        background: white;
      }
      img{
        margin-left: 45%;
        margin-top: 11%;
      }
      h1{
        margin-left: 46.5%;
      }
      .navigation{
          position: fixed;
          width: 17%; 
          height: 100%;
          background: black;
          overflow: hidden;
      }
      .navigation .user{
        font-size: 8vw;
         
        margin-top: 15%;
        margin-left: 25%; 
        color: orange;
      }
      .navigation .user h1
        {
            font-size: 1.2vw;
            margin-left: -1%;
            color: white;
           
        }
         .navigation .userp
        {
            height: 2px;
            margin-top: 15%;
            width: 300px;
            margin-left: -35%;
            background-color: white;
        }
      /*
      .navigation:hover{
          width: 17%;
          transition:0.6s;
      }
      .navigation:hover #user{
         font-size: 10rem;
         margin-left: 18%;  
      }
      .navigation:hover ul{
        top:31%;
      }
      */
      .navigation ul{
        position: absolute;
          top: 35%;
          left: 0;
          width: 100%;
          cursor: pointer;
      }
      .navigation ul li{
        position: relative;
        width: 100%;
        list-style: none;
      }
      .navigation ul li:hover{
        background: orange;
        border-radius: 5px;
        transition:0.4s;
      }
      .navigation ul li a{
        position: relative;
        display: block;
        width: 100%;
        display: flex;
        text-decoration: none;
        color: #fff;
      }
      .navigation ul li a .icon{
        position: relative;
        display: block;
        min-width: 60px;
        height: 60px;  
        line-height: 60px;
        text-align: center; 
        font-size: 130%;   
        top: 10%;  
      }
      .navigation ul li a .icon .fa{
        font-size: 24px;
      }
      .navigation ul li a .title{
        position: relative;
        display:block;
        padding: 0 10px;
        height: 60px;
        line-height: 60px;
        text-align: start;
        white-space: nowrapx;
        top: 10%;
      }

        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 8% ; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            transition-delay: 5s;
        }

        /* Modal Content */
        .modal-content {
             transition-delay: 5s;
        background-color: #fefefe;
        margin: auto;
        padding: 10px;
        border: 1px solid #888;
        width: 50%;
        height:65%;
        border-radius:10px;
        text-align: center;
        margin-top: 10px;
        }
        

        /* The Close Button */
        .close {
        
        margin-right: 3%;
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }

        /* ---Feedback style--- */
        .name h1
        {
            color: black;
            margin-top: 30px;
            margin-right: 12%;
            font-size: 2vw;
            margin-left: 15%;
        }
        .name input[type='text'] 
        {
            height: 35px;
            width: 630px;
            margin-top: 10px;
            margin-left: 20px;
            font-size: 17px;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
        }
        
        #txt4
        {
            height: 150px;
            margin-top: 20px;
            width: 630px;
            margin-left: 2%;
            font-size: 17px;
            border: 1px solid black;
            cursor: text;
            outline: none;
            border-top:none;
        }
        .name input[type='submit']
        {
            height: 35px;
            width: 150px;
            font-size: 20px;
            margin-top: 3%;
            margin-left: 65%;
            background: orange; 
            cursor: pointer;
            color: white;
            border: 1px solid black;
            
        }
        .name input[type='submit']:hover{
          transform: scale(1.1);
        }
        
</style>  
  </head>
  <body>
    <div class="navigation">
      <div class="user" id="user">
        <i class="fas fa-user-circle"></i>  
          <h1><?php echo $res['First_Name'].' '. $res['Middle_Name'].' '. $res['Last_Name']?></h1>
          <div class="userp"></div>
      </div>
      <ul>
        <li>
           <a href="">
                <span class="icon"><i class="fas fa-home"></i></span>
                <span class="title">Profile</span>
            </a>
        </li>
        <li>
          <a href="Quizcard.php">
            <span class="icon"><i class="fas fa-question-circle"></i></span>
            <span class="title">Quiz</span>
            </a>    
        </li>
        <li>
          <a id="feedback">
            <span class="icon"><i class="fas fa-comments"></i></span> 
            <span class="title">Feedback</span>
           </a>

            <!-- The Modal -->
        <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                <span class="close">&times;</span>
                <form action="feedback1.php" method="post">
                
                
                <div class="name">
                  <h1>Feedback Form</h1>
                <input type="text" name="txt1" placeholder="Name." readonly autocomplete="off" required value="<?php echo $first.' '.$middle.' '.$last ?>"><br>
                <input type="text" name="txt2" placeholder="Email Id." readonly autocomplete="off" required value="<?php echo $email?>"><br>
                <input type="text" name="txt3" placeholder="Mobile No." readonly autocomplete="off" required  value="<?php echo $mob?>"><br>
                <input type="text" name="txt4" placeholder="Comment...." autocomplete="off" required><br>
                <input type="submit" value="Submit">
            </div>
        </div>
        </li>
        <li>
          <a href="index.html">
            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
            <span class="title">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="profile">
      <img src="css/img/user.png">
      <h1>Welcome</h1>
    </div>



<script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("feedback");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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