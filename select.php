<?php
include('sql_connect.php');
$con->select_db('my_db');
$result = $con->query('SELECT * FROM persons');
echo "<table border='1'>
  <tr>
    <th>PersonID</th>
    <th>FirstName</th>
    <th>Age</th>
  </tr>";

while ($row = $result->fetch_array()) {
  echo "<tr align='center'>
      <td>{$row['personID']}</td>
      <td>{$row['FirstName']}</td>
      <td>{$row['Age']}</td>
    </tr>";
}
echo "</table>";
