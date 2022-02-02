<?php
include 'config.php';

$mysql= "SELECT * FROM users";
$result= mysqli_query($conn,$mysql);
echo "<table>";
echo "<tr><th>name</th><th>email</th></tr>";

while($row= mysqli_fetch_array($result, MYSQLI_ASSOC))
{
  echo "<tr><td>";
  echo $row['name'];
  echo "</td><td>";
  echo $row['email'];
  echo "</td></tr>";
}
echo "</table>";
?>