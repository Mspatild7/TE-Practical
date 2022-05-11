<!DOCTYPE html>
<?php 
include("connection.php");

$result=mysqli_query($conn,"select * from subjects");


?>
<html>
    <title>Quizzy</title>
<head>
<link rel="icon" href="css/img/favicon.jpg" type="jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<style>
body {font-family: 'Montserrat', sans-serif; }

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
        background-image:linear-gradient(rgb(0,0,0,0.9),rgb(0,0,0,0.7)), url(css/img/bgm.jpg); /* Fallback color */
        background-size: cover; 
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 10px;
        border: 1px solid #888;
        width: 20%;
        height:50%;
        border-radius:10px;
        text-align: center;
        margin-top: 15px;
        }
        .modal-content p{
            font-size: 1vw;
            text-align: center;
            margin-top: 50%;
        }
        .required{
            color: red;
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
      /*Dropdown selection menu*/
      .Menu h3{
        margin-top:25%;
        font-size:1.5vw;
      }
      select,option{
        text-align:center;
        margin-top: 10px;
        border: 2px solid black ;
        border-radius:10px;
        color:#ff7b54;
        height: 35px;
        width: 70%;
        size:10%;
        outline:10px;
        font-weight:bold;
        font-family: 'Montserrat', sans-serif; 
        
      }
      .Menu input[type='submit']{
        height:35px;
        width: 50%;
        font-size: 1.3vw;
        margin-top: 10%;
        margin-left: 1%;
        background:#ff7b54;  
        cursor: pointer;
        color: white;
        border: none;
        border-radius:10px;
        font-family: 'Montserrat', sans-serif; 
      }
      .Menu input[type='submit']:hover{
        transform:scale(1.1)
      }

</style>
</head>
<body>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <form action="testque.php" method="post">
    <div class="Menu">
      <h3>Select Topic</h3>
      <select class="topics" name="topics">
         
           <?php 
      while($res=mysqli_fetch_array($result))
      {
      ?>
         
       <option value="<?php echo $res['subject_name']?>"><?php echo $res['subject_name']?></option>
           <?php 
        
      }?>
            <input type="submit" value="Submit" onclick="location.href='#'" required>
           </select>
    </div>
       </form>
     
  </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
onload = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  window.location='StudDash.php';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
  

</body>
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
</html>
