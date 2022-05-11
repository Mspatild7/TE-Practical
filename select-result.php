<!DOCTYPE html>
<html>
<head>
<style>
#t1 {
  width: 98%;
    margin-left: 1%;
  border-collapse: collapse;
    
}

#t1, #t1 td, #t1 th {
 
  padding: 5px;
    border-bottom: 1px solid grey;
}
 #t1 #td12
    {
        width: 50%;
    }
    #t1 #td7
    {
        width: 15%;
    }
     #t1 #td8
    {
        width: 15%;
    }
    #t1 #td9
    {
        width: 15%;
    }
    #t1 #td10
    {
        width: 15%;
    }
     #t1 #td11
    {
        width: 5%;
    }
    #h2
    {
        font-size: 1.3vw;
        margin-left: 1%;
        margin-top: 2%;
    }
th {text-align: left;
    background-color:#D68910 ;
    color: white;
    font-weight: bold;
    }
</style>
</head>
<body>

<?php
$q1 = $_GET['q1'];
    $result1=$q1.'result';  

$con = mysqli_connect('localhost','root','','quiz');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$c=0;
$sql="SELECT * FROM $result1";
$result = mysqli_query($con,$sql);
echo "<h1 id='h2'>Subject Name: $q1</h1>";

echo "<table id='t1'>
<tr>
<th>Sr No</th>
<th>Student Name</th>
<th>Roll No</th>
<th>Date</th>
<th>Time</th>
<th>Marks</th>

<th>Action</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    $c++;
  echo "<tr>";
    echo "<td id='td9'>" . $c . "</td>";
  echo "<td id='td12'>" . $row['student_name'] . "</td>";
  echo "<td id='td7'>" . $row['roll_no'] . "</td>";
  echo "<td id='td8'>" . $row['date'] . "</td>";
  echo "<td id='td9'>" . $row['time'] . "</td>";
  echo "<td id='td10'>" . $row['marks'] . "</td>";

    echo '<td id="td11"><a onclick="javascript:confirmationDeleteres($(this));return false;" href="delete-result.php?id='.$row['id'].'&subname='.$result1.'" >delete</a></td>';
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
     <script>
     function confirmationDeleteres(anchor)
{
   var conf = confirm('Are you sure want to delete result?');
   if(conf)
      window.location=anchor.attr("href");
}
    </script>
</html>