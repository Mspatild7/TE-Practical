<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','quiz');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM $q";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Question</th>
<th>Option 1</th>
<th>Option 2</th>
<th>Option 3</th>
<th>Option 4</th>
<th>Answer</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['question'] . "</td>";
  echo "<td>" . $row['option1'] . "</td>";
  echo "<td>" . $row['option2'] . "</td>";
  echo "<td>" . $row['option3'] . "</td>";
  echo "<td>" . $row['option4'] . "</td>";
    echo "<td>" . $row['answer'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>