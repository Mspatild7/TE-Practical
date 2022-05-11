<?php 
include("connection.php");
include("admin-login-check.php");
$user=$_SESSION['un'];
$result=mysqli_query($conn,"select * from admin where username='$user'");
$res=mysqli_fetch_array($result);

$feed=mysqli_query($conn,"select * from feedback");
$f=0;

$totalstudent=mysqli_query($conn,"select * from student_registration");


$stdcount=0;
 while($totalstudent1=mysqli_fetch_array($totalstudent))
      {
          $stdcount++;
      }

$totalsubject=mysqli_query($conn,"select * from subjects");

$totalsubject5=mysqli_query($conn,"select * from subjects");

$sbcount=0;
 while($totalsubject1=mysqli_fetch_array($totalsubject))
      {
          $sbcount++;
      }

$student=mysqli_query($conn,"select * from student_registration ORDER BY Roll_no ASC");



$subject=mysqli_query($conn,"select * from subjects");
$c=0;

$subresult=mysqli_query($conn,"select * from subjects");



$feed=mysqli_query($conn,"select * from feedback");
$feed1=mysqli_fetch_array($feed);



?>


 

<html>
<head>
     <title>QUIZZY</title>
        <link rel="icon" href="css/img/favicon.jpg" type="jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Caudex&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
	</script>
    <script src="js/wow.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="css/admin-panel1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
	</script>
    </head>
    <body>
        <div id="myModal" class="modal">
<form action="admin-profile-update.php" method="post">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
      <h1>EDIT</h1>
   <input type="text" id="name2" name="name" value="<?php echo $res['Name'];?>">
      <input type="text" id="post" name="post" value="<?php echo $res['post'];?>">
      <button type="submit" id="sub" name="sub">Update</button>
  </div>
</form>
</div>
       
    <div class="container-fuild">
        <div class="left" id="left">
            <h1><i class="fas fa-bars wow flipInX" id="bar1" onclick="slide()"></i></h1>
            <br>
             <h2><i class="fas fa-bars wow flipInX" id="bar2" onclick="slide2()"></i></h2>
            <div class="profile">
          <i class="fas fa-user-circle wow flipInX" id="prof"></i>
             <h2 id="name" class="wow fadeInDown"><?php echo $res['Name'];?></h2>
                 <h2 id="name1" class="wow fadeInDown"><?php echo $res['post'];?></h2>
               <i class="fas fa-pen-square" id="myBtn"></i>
            </div>
             <div class="bor" id="bor"></div>
            <div class="menuname">
            <div class="dashboard wow fadeInLeft" onclick="dashboard()">
                <h1 id="d">&nbsp;<i class="fab fa-dashcube"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</h1>
                <i class="fab fa-dashcube" id="d5"></i>
                </div>
                 <div class="registration wow fadeInLeft" onclick="registration()">
                 <h1 id="d1"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;Registration</h1>
                     <i class="fas fa-user-plus" id="d6"></i>
                </div>
                <div class="studentList wow fadeInLeft" onclick="stdlist()">
                 <h1 id="d2"><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;Student List</h1>
                    <i class="fas fa-users" id="d7"></i>
                </div>
                 <div class="examsetting wow fadeInLeft" onclick="examset()">
                 <h1 id="d3"><i class="fas fa-book"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exam Setting</h1>
                     <i class="fas fa-book" id="d8"></i>
                </div>
                 <div class="result wow fadeInLeft" onclick="result()">
                 <h1 id="d4"><i class="fas fa-info-circle" id="i"></i>&nbsp;&nbsp;&nbsp;&nbsp;Result</h1>
                     <i class="fas fa-info-circle" id="d9"></i>
                </div>
                <div class="feedback wow fadeInLeft" onclick="feedback()">
                 <h1 id="d12"><i class="far fa-comments"></i>&nbsp;&nbsp;&nbsp;&nbsp;Feedback</h1>
                     <i class="far fa-comments" id="d13"></i>
                </div>
                <div class="logout" onclick="window.location='admin-login.php'">
                 <h1 id="d10"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</h1>
                     <i class="fas fa-sign-out-alt" id="d11"></i>
                </div>
            </div>
        </div>
        <div class="menubar">
         <h2><i class="fas fa-bars" id="bar3" onclick="slide3()"></i></h2>
           
            <div class="menu" id="menu">
             <h3><i class="fas fa-times" id="crossbar" onclick="slide4()"></i></h3>
                <div class="profile-mob">
                    <br>
          <i class="fas fa-user-circle wow flipInX" id="prof"></i>
              <h2 id="name" class="wow fadeInDown"><?php echo $res['Name'];?></h2>
               <h2 id="name" class="wow fadeInDown"><?php echo $res['post'];?></h2>
                      
            </div>
                <div class="bor" id="bor"></div>
                <div class="menuname-mob">
            <div class="dashboard wow fadeInLeft">
                <h1 id="d">&nbsp;<i class="fab fa-dashcube"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</h1>
                
                </div>
                 <div class="registration wow fadeInLeft">
                 <h1 id="d1"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;Registration</h1>
                   
                </div>
                <div class="studentList wow fadeInLeft">
                 <h1 id="d2"><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;Student List</h1>
                    
                </div>
                 <div class="examsetting wow fadeInLeft">
                 <h1 id="d3"><i class="fas fa-book"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exam Setting</h1>
                    
                </div>
                 <div class="result wow fadeInLeft">
                 <h1 id="d4"><i class="fas fa-info-circle" id="i"></i>&nbsp;&nbsp;&nbsp;&nbsp;Result</h1>
                     
                </div>
                     <div class="feedback wow fadeInLeft">
                 <h1 id="d14"><i class="far fa-comments" id="i"></i>&nbsp;&nbsp;&nbsp;&nbsp;Feedback</h1>
                     
                </div>
                <div class="logout " onclick="window.location='admin-login.php'">
                    <br>
                 <h1 id="d10"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</h1>
                    
                </div>
                    
            </div>
            </div>
        </div>
        
        <div class="right" id="right">
      <div class="top">
          <h1><p1>Quizzy</p1></h1>
          <div class="social">

              </div>
            </div>
            <div class="dashboard" id="dashboard">
          <h1 class="wow fadeInLeft"><i class="fab fa-dashcube"></i>&nbsp;Dashboard</h1>
                <div class="dash">
        <div class="div1 wow flipInX">
            <div class="div1-part1">
                <h3><i class="fas fa-users"></i></h3>
                <br>
              
           <p>Total Students<br><?php echo $stdcount;?></p>
            </div>
              <div class="div1-part2">
            <h1 onclick="goreg()">More&nbsp;Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></h1>
            </div>
                    </div>
                 <div class="div2 wow flipInX">
                     <div class="div2-part1">
            <h3><i class="fas fa-book"></i></h3>
                <br>
              
     
           <p>Total Subjects<br><?php echo $sbcount;?></p>
     
            </div>
                       <div class="div2-part2">
             <h1 onclick="gosub()">More&nbsp;Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></h1>
            </div>
                    </div>
                 <div class="div3 wow flipInX">
                    <div class="div3-part1">
            <h3><i class="fas fa-info-circle" id="i"></i></h3>
                <br>
              
           <p>Results</p>
            </div>
                     <div class="div3-part2">
             <h1>More&nbsp;Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></h1>
            </div>
                    </div>
                    <br>
                   
                    </div>
                 <div class="chart">
                
                </div>
            </div>
            <!-- Registration start-->
           
            <div class="registration" id="registration">
               
               <form action="student-registration.php" method="post">
          <h1 class="wow fadeInLeft"><i class="fas fa-user-plus"></i>&nbsp;Registration</h1>
              
                    
                <div class="form ">
                    <div class="line"></div>
                    <h1>General Details</h1><br>
                    <div class="form2">
                        <h3>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last Name</h3>
                     <input type="text" id="firstname" name="firstname" onchange="fname()" required>
                        <input type="text" id="middlename" name="middlename" onchange="fmname()" required>
                        <input type="text" id="lastname" name="lastname" onchange="lname()" required><br><br><br>
                        <h3>Email Id</h3>
                      <input type="text" id="email"  onchange="email1()" name="email" required ><br><br><br>
                        <h3>Mobile No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll No</h3>
                      <input type="number" id="mob"  name="mob" onchange="mob1()" required>
                      <input type="number" id="rollno"  name="rollno" required>
                        
                    
                   
                       
                        
                      </div>
                </div>
                 <div class="form ">
                    <div class="line"></div>
                    <h1>Create Account</h1><br>
                    <div class="form2">
                        <h3>User Name</h3>
                     <input type="text" id="user"  required name="user"  readonly><br><br><br>
                        <h3>Password</h3>
                    <input type="password" id="pass"  required name="pass" onchange="pass1()"><br><br><br>
                        <h3>Confirm Password</h3>
                     <input type="password" id="cpass"  required name="cpass" onchange="cpass1()">
                    <button type="submit"  id="submit" name="submit"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Student</button>
                      
                      </div>
                </div>
                    </form>
                    
            </div>
            
            <!-- Registration end-->
            
             <!-- student-list start-->
            
            <div class="std-list" id="std-list">
          <h1 class="wow fadeInLeft"><i class="fas fa-users"></i>&nbsp;Student List</h1>
               <h3 id="total">Total Students:&nbsp;<?php echo $stdcount;?></h3>
               <div class="part1">
               
                   
          
             <div class="roll">
                 <br>
                   <h1>Roll No</h1>
                   </div>  
                   
                   <div class="name">
                         <br>
                   <h1>Student Name</h1>
                   </div> 
                   <div class="action">
                         <br>
                   <h1>Action</h1>
                   </div> 
                   <div class="details">
                         <br>
                   <h1>Details</h1>
                   </div> 
            </div>
                <?php 
                while($student1=mysqli_fetch_array($student))
                {
                ?>
                 <div class="part2 wow fadeInLeft">
                     <div class="roll">
                 <br>
                   <h1><?php echo $student1['Roll_no'];?></h1>
                   </div>  
                   
                   <div class="name">
                         <br>
                   <h1><?php echo $student1['First_Name']."  &nbsp ".$student1['Middle_Name']." &nbsp ".$student1['Last_Name'];?></h1>
                   </div> 
                   <div class="action">
                         <br>
                   <h1><p1><a id="<?php echo 'myBtn'.$student1['id'] ?>">Edit</a></p1>&nbsp;&nbsp;<p2><?php echo '<a onclick="javascript:confirmationDeletestudent($(this));return false;" href="delete-student.php?id='.$student1['id'].'">Delete</a>'?></p2></h1>
                   </div> 
                   <div class="details">
                      
                        <a id="<?php echo 'myBtn'.$student1['Mob_no'] ?>">See Details&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                   </div> 
                </div>
                 <div id="<?php echo $student1['Mob_no'] ?>" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="<?php echo 'close'.$student1['Mob_no'] ?>" id="close1">&times;</span><br>
      <h1>Name</h1>
      <input type="text" readonly value="<?php echo $student1['First_Name']."  &nbsp ".$student1['Middle_Name']." &nbsp ".$student1['Last_Name'];?>">
    <h2>Email</h2>
      <input type="text" readonly value="<?php echo $student1['Email_id']  ?>">
      <h2>Mobile No</h2>
      <input type="text" readonly value="<?php echo $student1['Mob_no']  ?>">
      <h2>Roll No</h2>
      <input type="text" readonly value="<?php echo $student1['Roll_no']  ?>">
      <h2>Username</h2>
      <input type="text" readonly value="<?php echo $student1['User_id']  ?>">
      <h2>Password</h2>
      <input type="text" readonly value="<?php echo $student1['Password']  ?>">
  </div>

</div>
                
                <div id="<?php echo $student1['id'] ?>" class="modal2">
<form action="update-student.php" method="post">
  <!-- Modal content -->
  <div class="modal-content2">
    <span class="<?php echo 'close'.$student1['id'] ?>" id="close2">&times;</span><br>
      <h1>Name</h1>
     <input type="text" id="n" value="<?php echo $student1['First_Name']  ?>" name="first" ><input type="text" id="n" value="<?php echo $student1['Middle_Name']  ?>" name="middle"><input type="text" id="n" value="<?php echo $student1['Last_Name']  ?>" name="last">
    <h2>Email</h2>
      <input type="text"  value="<?php echo $student1['Email_id']  ?>" name="email">
      <h2>Mobile No</h2>
      <input type="text"  value="<?php echo $student1['Mob_no']  ?>" name="mob">
      <h2>Roll No</h2>
      <input type="text"  value="<?php echo $student1['Roll_no']  ?>" name="roll">
      <h2>Username</h2>
      <input type="text"  value="<?php echo $student1['User_id']  ?>" name="user">
      <h2>Password</h2>
      <input type="text"  value="<?php echo $student1['Password']  ?>" name="pass">
      <input type="hidden" value="<?php echo $student1['id']  ?>" name="id">
      <input type="submit" value="Update" id="submit" name="submit">
  </div>
</form>
</div>
                
<script>




document.getElementById("<?php echo 'myBtn'.$student1['id'] ?>").onclick = function() {
  document.getElementById("<?php echo $student1['id'] ?>").style.display = "block";
}

// When the user clicks on <span> (x), close the modal
 document.getElementsByClassName("<?php echo 'close'.$student1['id'] ?>")[0].onclick = function() {
  document.getElementById("<?php echo $student1['id'] ?>").style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    document.getElementById("<?php echo $student1['id'] ?>").style.display = "none";
  }
}</script>
                <script>
    
document.getElementById("<?php echo 'myBtn'.$student1['Mob_no'] ?>").onclick = function() {
  document.getElementById("<?php echo $student1['Mob_no'] ?>").style.display = "block";
}

// When the user clicks on <span> (x), close the modal
 document.getElementsByClassName("<?php echo 'close'.$student1['Mob_no'] ?>")[0].onclick = function() {
  document.getElementById("<?php echo $student1['Mob_no'] ?>").style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    document.getElementById("<?php echo $student1['Mob_no'] ?>").style.display = "none";
  }
}
    </script>
                <?php }?>
                <br>
                <div class="delete">
               <a onclick='javascript:confirmationDelete($(this));return false;' href="deleteall-student.php" id="deleteall">Delete All</a>
                    </div>
            </div>
            
             <!--student-list end-->
            
            <!--exam-setting start-->
            
             <div class="exam-setting" id="exam-setting">
          <h1 class="wow fadeInLeft"><i class="fas fa-book"></i>&nbsp;Subject</h1>
    <div id="myModal3" class="modal3">
<form action="add-subject.php" method="post">
  <!-- Modal content -->
  <div class="modal-content3">
    <span class="close3" id="close3">&times;</span><br><br>
      <h1>Subject Name</h1>
      <input type="text" placeholder="Enter Subject Name" required name="subname"><br>
      <h1>Time</h1>
      <input type="text" placeholder="Enter hours in two digits" required id="hour" onchange="t1()" class="time" name="hour"><input type="text" placeholder="Enter min in two digits" required id="min" onchange="t2()" class="time" name="min"><input type="text" placeholder="Enter sec in two digits" required id="sec" onchange="t3()" class="time" name="sec"><br>
      <h1>No of Questions</h1>
      <input type="text" placeholder="Enter No of questions" required name="noque">
      <input type="submit" id="add" name="add" value="Add">
   
  </div>
</form>
</div>
                 <br>
                
                 <button id="btn">Add Question</button>
                 <button id="addsubject"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Subject</button>
                 <table id="tb" >
                 <tr >
                     <th>Sr No</th>
                     <th>Subject Name</th>
                     <th>Time</th>
                     <th>No of <br>Questions</th>
                     <th>Action</th>
                     <th>  </th>
                     </tr>
                     <?php 
                 while($subject1=mysqli_fetch_array($subject))
                 {
                  $c++;
                 ?>
                 <tr id="tr">
                     
                     <td id="td1"><?php echo $c?></td>
                     <td id="td2"><?php echo $subject1['subject_name']?>
                     </td>
                     <td id="td3"><?php echo $subject1['hour'].':'.$subject1['min'].":".$subject1['min']?></td>
                     <td id="td4"><?php echo $subject1['no_question']?></td>
                     <td id="td5"><a id="<?php echo 'myBtn'.$subject1['id'] ?>" class="edit">Edit  </a>/ <?php echo '<a onclick="javascript:confirmationDeletesubject($(this));return false;" href="delete-subject.php?id='.$subject1['id'].'&subname='.$subject1['subject_name'].'">Delete</a>'?></td>
                     <td id="td6"><a onclick="showque('<?php echo $subject1['subject_name']?>')"  id="que">Go to Questions >></a></td>
                    
                      
                     </tr>

                     <div id="<?php echo $subject1['id'] ?>" class="modal3">
<form action="update-subject.php" method="post">
  <!-- Modal content -->
  <div class="modal-content3">
    <span class="<?php echo 'close'.$subject1['id'] ?>" id="close2">&times;</span><br>
      <input type="hidden" value="<?php echo $subject1['id'] ?>" name="id">
       <input type="hidden" value="<?php echo $subject1['subject_name'] ?>" name="oldsub" id="oldsub">
 
     <h1>Subject Name</h1>
      <input type="text"  required name="subname" value="<?php echo $subject1['subject_name']?>"><br>
      <h1>Time</h1>
      <input type="text" value="<?php echo $subject1['hour']?>" required id="hour1" onchange="t4()" class="time" name="hour"><input type="text" value="<?php echo $subject1['min']?>" required id="min1" onchange="t5()" class="time" name="min"><input type="text" value="<?php echo $subject1['sec']?>" required id="sec1" onchange="t6()" class="time" name="sec"><br>
      <h1>No of Questions</h1>
      <input type="text" value="<?php echo $subject1['no_question']?>" required name="noque">
      <input type="submit" id="add" name="add" value="Update">
  </div>
</form>
            </div>
  
                    
    <script>
    
document.getElementById("<?php echo 'myBtn'.$subject1['id'] ?>").onclick = function() {
  document.getElementById("<?php echo $subject1['id'] ?>").style.display = "block";
}

// When the user clicks on <span> (x), close the modal
 document.getElementsByClassName("<?php echo 'close'.$subject1['id'] ?>")[0].onclick = function() {
  document.getElementById("<?php echo $subject1['id'] ?>").style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    document.getElementById("<?php echo $subject1['id'] ?>").style.display = "none";
  }
}
    </script>
                     <script>
function showque(str) {
    
   
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","select-question.php?q="+str,true);
    xmlhttp.send();
  }
     var p=document.getElementById('part2');
            p.style.display="block";
}
</script>
                    
       
                 
                     <?php 
                 }
                 ?>
                 </table>
                                     <div id="modal4" class="modal4">
   <form method="get" action="" id="contactform" >
       
  <div class="modal-content4">
    <span class="closex" id="close4">&times;</span><br>
      <select id="sb" name="sb">
   <?php 
       while($sub=mysqli_fetch_array($totalsubject5))
       {
       ?>
      
     <option value="<?php echo $sub['subject_name'];?>"><?php echo $sub['subject_name'];?></option>
     
       <?php 
       }
       ?>
           </select>
      <input type="text" placeholder="Enter Question.." required name="question" id="question" required/><br>
      <input type="text" placeholder="Option A..."  name="optiona" id="optiona" required/><br>
      <input type="text" placeholder="Option B..." required name="optionb" id="optionb" required/><br>
      <input type="text" placeholder="Option C..." required name="optionc" id="optionc" required/><br>
      <input type="text" placeholder="Option d..." required name="optiond" id="optiond" required/><br>
      <select id="answer" name="answer">
    
      <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
      </select>
    <input type="submit" value="Add" id="insert" class="insert">
           
  </div>
                                       </form>
            
    
            </div>
                  <script>
    
document.getElementById("btn").onclick = function() {
  document.getElementById("modal4").style.display = "block";
}

// When the user clicks on <span> (x), close the modal
 document.getElementsByClassName("closex")[0].onclick = function() {
  document.getElementById("modal4").style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    document.getElementById("modal4").style.display = "none";
  }
}
    </script>
                <div class="part2" id="part2">
                 <p id="question"></p>
                
                 <div id="txtHint"></div>
                 </div>
                
            </div>
              <!--exam-setting end-->
            
              <!--result start-->
            
            <div class="result" id="result">
          <h1 class="wow fadeInLeft"><i class="fas fa-info-circle" id="i"></i>&nbsp;Result</h1><br>
               
                <form>
   <select name="users1" onchange="showres(this.value)" id="re">
       <option value="">Select a Subject:</option>
        <?php 
                while($subres=mysqli_fetch_array($subresult))
                      {
                ?>
  
       <option value="<?php echo $subres['subject_name']?>"><?php echo $subres['subject_name']?></option>
 <?php
       }
       ?>
  </select>
</form>
<br>
<div id="txtHint1"></div>

            </div>
            
              <!--result end-->
              <!--feedback start-->
            <div class="feedback" id="feedback">
          <h1 class="wow fadeInLeft"><i class="far fa-comments"></i>&nbsp;Feedback</h1><br>
            <table>
                <tr id="tr">
                <th>Sr No</th>
                    <th>Student Name</th>
                    <th>Email Id</th>
                    <th>Mobile No</th>
                    <th>Comment</th>
                </tr>
                <?php 
                while($feed1=mysqli_fetch_array($feed))
                {
                    $f++;
                ?>
                <tr>
                    
                <td id="td1"><?php echo $f?></td>
                    <td id="td2"><?php echo $feed1['student_name'];?></td>
                    <td id="td3"><?php echo $feed1['email']?></td>
                    <td id="td4"><?php echo $feed1['mob']?></td>
                    <td id="td5"><textarea><?php echo $feed1['comment']?></textarea></td>
                </tr>
                <?php 
                }
                ?>
                </table><br><br>
                <a href="delete-feedback.php">Delete</a>
            </div>
            
              <!--feedback end-->
            
        </div>
        </div>
    </body>
    <script>
        //side menu bar
        function dashboard()
        {
            var dash=document.getElementById("dashboard");
             var reg=document.getElementById("registration");
             var stdlist=document.getElementById("std-list");
             var examset=document.getElementById("exam-setting");
             var result=document.getElementById("result");
             var feed=document.getElementById("feedback");
            dash.style.display="block";
             reg.style.display="none";
            stdlist.style.display="none";
            examset.style.display="none";
            result.style.display="none";
            feed.style.display="none";
        }
        function registration()
        {
             var dash=document.getElementById("dashboard");
             var reg=document.getElementById("registration");
             var stdlist=document.getElementById("std-list");
             var examset=document.getElementById("exam-setting");
             var result=document.getElementById("result");
             var feed=document.getElementById("feedback");
            dash.style.display="none";
             reg.style.display="block";
            stdlist.style.display="none";
            examset.style.display="none";
            result.style.display="none";
            feed.style.display="none";
        }
        function examset()
        {
            
             var dash=document.getElementById("dashboard");
             var reg=document.getElementById("registration");
             var stdlist=document.getElementById("std-list");
             var examset=document.getElementById("exam-setting");
             var result=document.getElementById("result");
             var feed=document.getElementById("feedback");
            dash.style.display="none";
             reg.style.display="none";
            stdlist.style.display="none";
            examset.style.display="block";
            result.style.display="none";
            feed.style.display="none";
        }
        function stdlist()
        {
             var dash=document.getElementById("dashboard");
             var reg=document.getElementById("registration");
             var stdlist=document.getElementById("std-list");
             var examset=document.getElementById("exam-setting");
             var result=document.getElementById("result");
             var feed=document.getElementById("feedback");
            dash.style.display="none";
             reg.style.display="none";
            stdlist.style.display="block";
            examset.style.display="none";
            result.style.display="none";
            feed.style.display="none";
        }
        function result()
        {
             var dash=document.getElementById("dashboard");
             var reg=document.getElementById("registration");
             var stdlist=document.getElementById("std-list");
             var examset=document.getElementById("exam-setting");
             var result=document.getElementById("result");
             var feed=document.getElementById("feedback");
            dash.style.display="none";
             reg.style.display="none";
            stdlist.style.display="none";
            examset.style.display="none";
            result.style.display="block";
            feed.style.display="none";
        }
        function feedback()
        {
             var dash=document.getElementById("dashboard");
             var reg=document.getElementById("registration");
             var stdlist=document.getElementById("std-list");
             var examset=document.getElementById("exam-setting");
             var result=document.getElementById("result");
             var feed=document.getElementById("feedback");
            dash.style.display="none";
             reg.style.display="none";
            stdlist.style.display="none";
            examset.style.display="none";
            result.style.display="none";
            feed.style.display="block";
        }
    function slide()
        {
            var d=document.getElementById("d");
              var d1=document.getElementById("d1");
              var d2=document.getElementById("d2");
              var d3=document.getElementById("d3");
              var d4=document.getElementById("d4");
             var d5=document.getElementById("d5");
              var d6=document.getElementById("d6");
              var d7=document.getElementById("d7");
              var d8=document.getElementById("d8");
             var d9=document.getElementById("d9");
             var d10=document.getElementById("d10");
             var d11=document.getElementById("d11");
             var d12=document.getElementById("d12");
             var d13=document.getElementById("d13");
            var s=document.getElementById("left");
             var name=document.getElementById("name");
             var name1=document.getElementById("name1");
            var img=document.getElementById("prof");
              var r=document.getElementById("right");
            var b=document.getElementById("bar1");
            var b2=document.getElementById("bar2");
            var myBtn=document.getElementById("myBtn");
            myBtn.style.display="none";
             s.style.width="5%";
            s.style.height="120%";
             img.style.fontSize="2vw";
            r.style.width="95%";
            b.style.display="none";
             b2.style.display="block";
              name.style.display="none";
            name1.style.display="none";
            d.style.display="none";
             d1.style.display="none";
             d2.style.display="none";
             d3.style.display="none";
             d4.style.display="none";
              d10.style.display="none";
             d12.style.display="none";
             d5.style.display="block";
            d6.style.display="block";
            d7.style.display="block";
            d8.style.display="block";
            d9.style.display="block";
            d11.style.display="block";
             d13.style.display="block";
        }
        function slide2()
        {
             var d=document.getElementById("d");
             var d1=document.getElementById("d1");
              var d2=document.getElementById("d2");
              var d3=document.getElementById("d3");
              var d4=document.getElementById("d4");
             var d5=document.getElementById("d5");
              var d6=document.getElementById("d6");
              var d7=document.getElementById("d7");
              var d8=document.getElementById("d8");
            var d9=document.getElementById("d9");
               var d10=document.getElementById("d10");
             var d11=document.getElementById("d11");
             var d12=document.getElementById("d12");
             var d13=document.getElementById("d13");
             var name=document.getElementById("name");
            var name1=document.getElementById("name1");
            var s=document.getElementById("left");
            var b=document.getElementById("bar1");
             var b2=document.getElementById("bar2");
              var r=document.getElementById("right");
              var img=document.getElementById("prof");
            var myBtn=document.getElementById("myBtn");
            myBtn.style.display="block";
             s.style.width="18%";
            name1.style.display="block";
            r.style.width="82%";
            img.style.fontSize="7vw";
            b.style.display="block";
            b2.style.display="none";
             name.style.display="block";
            d.style.display="block";
            d1.style.display="block";
            d2.style.display="block";
            d3.style.display="block";
            d4.style.display="block";
            d10.style.display="block";
             d12.style.display="block";
             d5.style.display="none";
             d6.style.display="none";
             d7.style.display="none";
             d8.style.display="none";
             d9.style.display="none";
            d11.style.display="none";
              d13.style.display="none";
        }
        function slide3()
        {
            var b3=document.getElementById('bar3');
            var m=document.getElementById('menu');
            m.style.display='block';
            b3.style.display="none";
            
        }
          function slide4()
        {
         var b3=document.getElementById('bar3');
            var m=document.getElementById('menu');
              m.style.display='none';
            b3.style.display="block";
        }
        //side menu bar end
    </script>
    <script>//student registration
        // student registration start
        function fname()
            {
                var ei=document.getElementById("firstname").value;
                 var regx=/^[A-Za-z]+$/
                var res=regx.test(ei)
                if(res==false)
                    {
                    
                alert("Enter valid First Name");
                document.getElementById("firstname").value="";
                    }
                
            }
        function mname()
            {
                var ei=document.getElementById("middlename").value;
                 var regx=/^[A-Za-z]+$/
                var res=regx.test(ei)
                if(res==false)
                    {
                    
                alert("Enter valid Middle Name");
                document.getElementById("middlename").value="";
                    }
                 
            }
        function lname()
            {
                var ei=document.getElementById("lastname").value;
                 var regx=/^[A-Za-z]+$/
                var res=regx.test(ei)
                if(res==false)
                    {
                    
                alert("Enter valid Last Name");
                document.getElementById("lastname").value="";
                    }
                
            }
        function email1()
            {
                var ei=document.getElementById("email").value;
                 var regx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/
                var res=regx.test(ei)
                if(res==false)
                    {
                    
                alert("Enter valid Email Id");
                document.getElementById("email").value="";
                    }
                 var user=document.getElementById('user').value;
                 document.getElementById('user').value=ei;
            }
         function mob1()
            {
                var mb=document.getElementById("mob").value;
                 var regx=/^\d{10}$/
                var res=regx.test(mb)
                if(res==false)
                    {
                    
                alert("Enter valid Mobile Number");
                document.getElementById("mob").value="";
                    }
            }
        
        function pass1()
            {
                var p=document.getElementById("pass").value;
                
                if(p.length<8)
                    {
                    
                alert("Password must contain atleast 8 characters")
                document.getElementById("pass").value="";
                    }

            }
            function cpass1()
            {
                 var p=document.getElementById("pass").value;
                 var rp=document.getElementById("cpass").value;
                if(rp!=p)
                    {
                    alert("confirm Password Do not Match");
                 document.getElementById("cpass").value="";
                    }
            }
        //student registration end
        
    </script>

    <script>
              new WOW().init();
              </script>
    <script>
        //modal 
        var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
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
    <script>
    function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete all record?');
   if(conf)
      window.location=anchor.attr("href");
}
        function confirmationDeletestudent(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
    </script>
    <script>
    function goreg()
        {
             var dash=document.getElementById("dashboard");
             var reg=document.getElementById("std-list");
            reg.style.display="block";
            dash.style.display="none";
        }
        function gosub()
        {
             var dash=document.getElementById("dashboard");
             var reg=document.getElementById("exam-setting");
            reg.style.display="block";
            dash.style.display="none";
        }
    </script>
   <script>
       var modal2 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn2 = document.getElementById("addsubject");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close3")[0];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
    </script>
    <script>
     function t1()
            {
                var mb=document.getElementById("hour").value;
                 var regx=/^\d{2}$/
                var res=regx.test(mb)
                if(res==false)
                    {
                    
                alert("Enter hour in 2 Digits");
                document.getElementById("hour").value="";
                    }
            }
        function t2()
            {
                var mb=document.getElementById("min").value;
                 var regx=/^\d{2}$/
                var res=regx.test(mb)
                if(res==false)
                    {
                    
                alert("Enter minutes in 2 Digits");
                document.getElementById("min").value="";
                    }
            }
        function t3()
            {
                var mb=document.getElementById("sec").value;
                 var regx=/^\d{2}$/
                var res=regx.test(mb)
                if(res==false)
                    {
                    
                alert("Enter seconds in 2 Digits");
                document.getElementById("sec").value="";
                    }
            }
        function t4()
            {
                var mb=document.getElementById("hour1").value;
                 var regx=/^\d{2}$/
                var res=regx.test(mb)
                if(res==false)
                    {
                    
                alert("Enter hour in 2 Digits");
                document.getElementById("hour1").value="";
                    }
            }
        function t5()
            {
                var mb=document.getElementById("min1").value;
                 var regx=/^\d{2}$/
                var res=regx.test(mb)
                if(res==false)
                    {
                    
                alert("Enter minutes in 2 Digits");
                document.getElementById("min1").value="";
                    }
            }
        function t6()
            {
                var mb=document.getElementById("sec1").value;
                 var regx=/^\d{2}$/
                var res=regx.test(mb)
                if(res==false)
                    {
                    
                alert("Enter seconds in 2 Digits");
                document.getElementById("sec1").value="";
                    }
            }
    </script>
    <script>
     function confirmationDeletesubject(anchor)
{
   var conf = confirm('Are you sure want to delete this subject? if you delete then all data will delete including results and questions set');
   if(conf)
      window.location=anchor.attr("href");
}
        
    </script>
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

          <script>
function showres(str1) {
  if (str1 == "") {
    document.getElementById("txtHint1").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint1").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","select-result.php?q1="+str1,true);
    xmlhttp.send();
  }
}
</script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
<script type="text/javascript">
    
    
    
    
    
    
	$(document).ready(function () {
    $('.insert').click(function (e) {
      e.preventDefault();
         var sub = $('#sb').val();
      var question = $('#question').val();
      var optiona = $('#optiona').val();
      var optionb = $('#optionb').val();
        var optionc = $('#optionc').val();
        var optiond = $('#optiond').val();
        var answer = $('#answer').val();
    
      $.ajax
        ({
          type: "get",
          url: "http://localhost/project/quiz/add-que.php",
          data: { "question": question, "optiona": optiona, "optionb": optionb,"optionc":optionc,"optiond":optiond,"answer":answer,"sub":sub },
          success: function (data) {
              
            alert(data);
               
              document.getElementById('modal4').style.display = "none";
            
             document.getElementById("question").value = "";
               document.getElementById("optiona").value = "";
                 document.getElementById("optionb").value = "";
                 document.getElementById("optionc").value = "";
                 document.getElementById("optiond").value = "";
                
              
          }
        });
    });
  });
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