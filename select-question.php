<!DOCTYPE html>
<html>
<head>
    <link href="css/select-question.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
    <script src="js/wow.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
	</script>
<style>
    body
    {
        background-color: #D7DBDD  ;
    }
#t {
  width: 100%;
  border-collapse: collapse;
    
}

#t, #t td, #t th {
 
  padding: 5px;
    border-bottom: 1px solid grey;
}
 #t #td1
    {
        width: 40%;
        
    }
    #t #td2
    {
        width: 15%;
    }
     #t #td3
    {
        width: 15%;
    }
    #t #td4
    {
        width: 15%;
    }
    #t #td5
    {
        width: 15%;
    }
     #t #td7
    {
        width: 10%;
        background-color: white;
    }
     #t #td6
    {
        width: 5%;
        
    }
    #h1
    {
        font-size: 1.3vw;
        margin-left: 0%;
    }
th {text-align: left;}
    #all
    {
        background-color: #E74C3C;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        text-decoration: none;
        cursor: pointer;
        color: white;
        font-weight: bold;
        margin-top: 10%;
        margin-left: 45%;
        margin-bottom: 5%;
    }
</style>
</head>
<body >

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','quiz');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM $q";
$result = mysqli_query($con,$sql);
echo "<h1 id='h1'>Subject Name:$q</h1>";
echo "<table id='t'>
<tr>
<th>Question</th>
<th>Option 1</th>
<th>Option 2</th>
<th>Option 3</th>
<th>Option 4</th>
<th>Answer</th>
<th>Action</th>
</tr>";
while($row = mysqli_fetch_array($result)) 

{

?>
  <tr>
   <td id="td1"><?php echo $row['question']?></td>
  <td id="td2"><?php echo $row['option1']?></td>
  <td id="td3"><?php echo $row['option2']?></td>
 <td id="td4"><?php echo $row['option3']?></td>
  <td id="td5"><?php echo $row['option4']?></td>
   <td id="td6"><?php echo $row['answer']?></td>

    <td id="td7"><p2><?php echo '<a id="delete" onclick="javascript:confirmationDeleteque($(this));return false;" href="delete-question.php?id='.$row['id'].'&name='.$q.'">Delete</a>'?></p2></td>
  
    </tr>
    
 <div id="modal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content3">
    <span class="close" id="close2" onclick="display1()">&times;</span><br>
      
  </div>

            </div>
     
       <script>
     function confirmationDeleteque(anchor)
{
   var conf = confirm('Are you sure want to delete question?');
   if(conf)
      window.location=anchor.attr("href");
}
    </script>
<?php
}
   
echo "</table><br><br>";
echo '<a id="all" href="delete-all-question.php?sname='.$q.'">Delete All</a><br>';
?>
</body>
    <script>
    function display()
         {
             var m=document.getElementById('modal3');
             m.style.display="block";
         }
         function display1()
         {
             var m=document.getElementById('modal3');
             m.style.display="none";
         }
    
    </script>
    <script>
     function confirmationDeleteque(anchor)
{
   var conf = confirm('Are you sure want to delete question?');
   if(conf)
      window.location=anchor.attr("href");
}
    </script>
</html>