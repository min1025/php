<?php
include('sql_connect.php');
$con->select_db('my_db');
$result = $con->query('SELECT * FROM persons');
echo "<a href='add.php'>New Record</a>";
echo "<table border='1'>
  <tr>
    <th>PersonID</th>
    <th>FirstName</th>
    <th>Age</th>
    <th>UPDATE</th>
    <th>DELETE</th>
  </tr>";

while ($row = $result->fetch_array()) {
  echo "<tr align='center'>
      <td>{$row['personID']}</td>
      <td>{$row['FirstName']}</td>
      <td>{$row['Age']}</td>
      <th><a href=\"update.php?personID={$row['personID']}\">UPDATE</a></th>
      <th><a href=\"delete.php?personID={$row['personID']}\">DELETE</a></th>
    </tr>";
}
echo "</table>";
