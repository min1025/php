<?php
echo "<form method=\"get\">
<table border='1'>
<tr>
<th>personID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>
</tr>";
echo "<tr>
<td><input type='text' name='personID' value=$_GET[personID] readonly></td>
<td><input type='text' name='FirstName' value=$_GET[FirstName]></td>
<td><input type='text' name='LastName' value=$_GET[LastName]></td>
<td><input type='text' name='Age' value=$_GET[Age]></td>
</tr>";
echo "<tr height=20>
<td colspan='4' align=center><input type='submit' value='修改' name='submit'></td>
</tr>";
echo "</table></form>";

include('sql_connect.php');
$con->select_db('my_db');
$result = $con->query('SELECT * FROM persons');
$sql = sprintf("UPDATE persons set FirstName='{$_GET['FirstName']}',LastName='{$_GET['LastName']}',Age='{$_GET['Age']}' WHERE personID=$_GET[personID]");
// echo $sql;
if (isset($_GET['submit'])) {
  $con->query($sql);
  header("location:index.php");
}