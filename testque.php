<?php 
include("connection.php");
include('student-login-check.php');
$user=$_SESSION['stun'];
$topics=$_REQUEST['topics'];
$query="select * from subjects where subject_name='$topics'";
$r=mysqli_query($conn,$query);
$re=mysqli_fetch_array($r);

$noque=$re['no_question'];
$hours=$re['hour'];
$min=$re['min'];
$sec=$re['sec'];

$topics1=strtolower($topics);
$subres=$topics.'result'; 
$result=mysqli_query($conn,"SELECT * FROM `$topics` ORDER BY RAND () LIMIT $noque ");
$result1=mysqli_query($conn,"select * from student_registration where User_id='$user'");
 $res1=mysqli_fetch_array($result1);


?>
<html>
	<head>
		<title><?php echo $topics?>question</title>
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
    background-image: linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.7)), url("img/main.jpg");
    background-size:cover;      
    padding:0.1rem;
}
h1{ 
    font-size:3rem;
}
h2{
    margin-top:-1.5%;
    padding-bottom:1%;
    color:white;
 }
 .detail {
    margin-top:3%;
    color:black;
 }
 #det{
    color:black;
    margin-bottom:1%;
 }
#container 
{
    border-radius:5px;
    height: auto;
    width: 100%;
    margin-top: 10px;
    margin-left: 1%;
}
#r
{
    height: 20px;
    width: 20px;
    text-align:center;  
}           
ul 
{
    padding: 0;
    margin: 0px;
    width: 100%;
}
ul li
{
    border:solid black;
    border-radius: 10px;
    width: 45%;
    margin-top: 5px;
    margin-left: 5px;
    height: 80px;
    padding: 10px;
    display: inline-block; 
    font-size: 20px;
    color: Black;
}
.btn1{
    margin-left:7%;
}
.bt3
{
    background-color:transparent;
    height: 100px;
    width: 1210px;
    font-family: 'PT Sans Narrow', sans-serif;
}
.bt3 #next
{
    font-family: 'PT Sans Narrow', sans-serif;
    margin-top: 24px;
    float: right;
    height: 45px;
    width: 300px;
    border-radius: 13px;
    border: none;
    margin-right:300px;
    font-size: 23px;
    background-color: #1c8adb;
    color: #fff;
    cursor: pointer;
}
.bt2 #prev
{
    font-family: 'PT Sans Narrow', sans-serif;
    margin-top: 25px;
    float: left;
    height: 45px;
    width: 300px;
    border-radius: 13px;
    border: none;
    margin-left:21.5%;
    font-size: 23px;
     background-color: #1c8adb;
    color: #fff;
    cursor: pointer;
}
.bt2 #prev:hover
{
    background: #39dc79;
    color: black;
}
.bt3 #next:hover
{
    background: #39dc79;
    color: black;
}

input[type="radio"]{
    cursor: pointer;
}

.date
{
    background-color:  rgba(0,0,0,0);
    height: 60px;
    width:fit-content;
    padding:0.5%;
    margin-top: 2%;
    margin-left: 83%;
    text-align: left;
    border: solid black;
    border-radius: 10px;
    color: black; 
    font-size: 3rem;
}
.que
{ 
    height: 6%;
    width: 10%;
    border:solid black;
    margin-top: -4%;
    margin-left: 5px;
    float: left;
    font-size: 20px;
    border-radius: 10px;
    text-align: center;
}
.que h1
{
    font-size: 30px;
    font-weight: lighter;
    color: black;
    margin-top: -1px;
}        
#txt12
{
    background-color: transparent;
    width: 93.5%;
    margin-left:15%;
    padding:5px;
    height:15%;
    margin:7px;
    color: black;
    font-size: 20px;
    border: solid black;
    border-radius: 10px;
    resize: none;       
}
#end
{
    float: right;
    margin-right: -450px;
    margin-top: 2%;
    background-color: transparent;;
    border:none;
    padding:1%;
    color: black;
    border-radius: 10px;
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 20px;
    cursor: pointer;         
 }
#end:hover
{   
    border:1px solid black;
    border-radius: 10px;
    color: red;
}

    </style>
</head>
	<body onload="ctimer()">
    <div class="quizzy">
        <h1>QUIZZY</h1>
        <h2>Unlocking Knowledge At The Speed Of Thoughts</h2>
    </div>
    <div class="detail" >
   
        <h2 id="det">Name : <?php echo $res1['First_Name'].' '.$res1['Middle_Name'].' '.$res1['Last_Name']?></h2>
        <h2 id="det">Email Id : <?php echo $res1['Email_id']?></h2>
        <h2 id="det">Subject :<?php echo $topics?></h2>
    </div>
   
        <div class="date">
         <span id="clock" ><?php  echo $hours?>:<?php  echo $min?>:<?php  echo $sec?></span>
         
         </div>
       
		<div id="container">
  			<div id="quiz"></div>
            <div class="btn1">
                <div class="bt2">
                <input type="button" value="Prev" id="prev">
                </div>
                
                <div class="bt3">
    		   <input type="button" value="Next" id="next">
                   
                    <input type="hidden" name="date" id="date">
                    <input type="hidden" name="time" id="time">
                    <input type="hidden" name="mark" id="mark">
                    <input type="hidden" name="un" id="un">
                    <input type="hidden" name="subres" id="subres" value="<?php echo $subres?>">
                    
                    
                </div>
               
                
                </div>
    		
    	    </div>
        </div>
       <script src="jquery-3.4.0.min.js"></script>
		<script>
        (function() 
 {
            ctimer();
            
  var allQuestions = [
      <?php 
      while($res=mysqli_fetch_array($result))
      {
          
      ?>
      {
    
    question: "<?php echo $res['question']?>",
    options: ["<?php echo $res['option1']?>", "<?php echo $res['option2']?>", "<?php echo $res['option3']?>", "<?php echo $res['option4']?>"],
    answer:parseInt('<?php echo $res['answer']; ?>')
      },
  <?php
      }
      ?>
  ];
  
  var quesCounter = 0;
  var selectOptions = [];
  var quizSpace = $('#quiz');
  var q=[];
  var a=[];
  nextQuestion();
    
  $('#next').click(function () 
    {
        chooseOption();
        
        
        
          quesCounter++;
          nextQuestion();
        
    });
  
  $('#prev').click(function () 
    {
        chooseOption();
        quesCounter--;
        nextQuestion();
    });
  
  function createElement(index) 
    {
        var element = $('<div>',{id: 'question'});
        var header = $('<div class="que3"><div class="que"><h1>Que: ' + (index + 1) + ' </h1></div>');
        element.append(header);

        var question = $('<textarea id="txt12"></textarea></div>').append(allQuestions[index].question);
        element.append(question);
     q.push(question);
        var radio = radioButtons(index);
        element.append(radio);

        return element;
    }
  
  function radioButtons(index) 
    {
        var radioItems = $('<ul>');
        var item;
        var input = '';
        for (var i = 0; i < allQuestions[index].options.length; i++) {
          item = $('<li>');
          input = '<input type="radio" id="r" name="answer" value=' + i + ' />';
          input += allQuestions[index].options[i];
          item.append(input);
          radioItems.append(item);
        }
        return radioItems;
  }
  
  function chooseOption() 
    {
        selectOptions[quesCounter] = +$('input[name="answer"]:checked').val();
        a.push(selectOptions[quesCounter]);
    }
   
  function nextQuestion() 
    {
        quizSpace.fadeIn(function() 
            {
              $('#question').remove();
              if(quesCounter < allQuestions.length)
                {
                    var nextQuestion = createElement(quesCounter);
                    quizSpace.append(nextQuestion).fadeIn();
                    if (!(isNaN(selectOptions[quesCounter]))) 
                    {
                      $('input[value='+selectOptions[quesCounter]+']').prop('checked', true);
                    }
                    if(quesCounter === 1)
                    {
                      $('#prev').show();
                        
                        
                       
                    } 
                    else if(quesCounter === 0)
                    {
                      $('#prev').hide();
                        
                      $('#next').show();
                        
                    }
                   else if(quesCounter === <?php echo (int)$noque-1;?>)
                       {
                            $('#next').show();
                           document.getElementById('next').value='Submit';
                       }
                    else if(quesCounter >= <?php echo (int)$noque-2;?>)
                       {
                            $('#next').show();
                           document.getElementById('next').value='Next';
                       }
                    
                }
              else 
                {
                    var scoreRslt = displayResult();
                    
                    localStorage.setItem('mark',scoreRslt);
                 JSON.stringify(q);
        localStorage.setItem("q", JSON.stringify(q));
                    window.location="testend.php";
                   
                    
                }
        });
    }
    function displayResult() 
    {
       
        var correct = 0;
        for (var i = 0; i < selectOptions.length; i++) 
        {
          if (selectOptions[i] === allQuestions[i].answer) 
          {
            correct++;
          }
        }
        
        return correct;
  }
$('#end').click(function () 
    {
    var scoreRslt = displayResult();
  
    var con=confirm("Are you sure to end the exam");
    if(con==true)
        {
       localStorage.setItem('mark',scoreRslt);
                    window.location="testend.php";
        }
        
    });
            function ctimer()
            {
                var timer=document.getElementById("clock").innerHTML;
                var arr=timer.split(":");
                var hours=arr[0];
                var min=arr[1];
                var sec=arr[2];
                if(sec==0)
                    {
                        if(min==0)
                            {
                                if(hours==0)
                                    {
                                        alert("Time Out");
                                        var scoreRslt = displayResult();
                    localStorage.setItem('mark',scoreRslt);
                    window.location="testend.php";
                                        return;
                                    }
                                hours--;
                                min=60;
                                if(hours<10) hours="0"+hours;
                            }
                        min--;
                        if(min<10) min="0"+min;
                        sec=59;
                    }
                else sec--;
                if(sec<10) sec="0"+sec;
                document.getElementById("clock").innerHTML=hours+":"+min+":"+sec;
                setTimeout(ctimer,1000);
                dis();
            }
 
  
})();
          
var subres=document.getElementById('subres').value;
            localStorage.setItem("subres",subres);
var c=new Date()
    var d=c.getDate();
    var m=c.getMonth();
    var y=c.getFullYear();
    m++;
    var p=d+"/"+m+"/"+y; 
    localStorage.setItem("date",p);


var c=new Date()
var time=c.toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/,"$1$3");
  localStorage.setItem("time",time);
 var q=localStorage.getItem("textvalue");
document.getElementById('un').value=q;

            function dis()
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
