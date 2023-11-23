<?php
include('sql_connect.php');
$con->select_db('my_db');
$result = $con->query('SELECT * FROM persons');
$sql = sprintf("INSERT INTO persons(FirstName,LastName,Age)VALUES('{$_POST['FirstName']}','{$_POST['LastName']}','{$_POST['Age']}')");
if (isset($_POST['submit'])) {
  $con->query($sql);
  header("location:index.php");
}
echo "<form method=\"post\">
<table border='1'>
  <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Age</th>
  </tr>";
echo "<tr>
  <td><input type='text' name='FirstName'></td>
  <td><input type='text' name='LastName'></td>
  <td><input type='text' name='Age'></td>
</tr>";
echo "<tr height=20>
  <td colspan='3' align=center><input type='submit' value='提交' name='submit'></td>
  </tr>";
echo "</table></form>";
