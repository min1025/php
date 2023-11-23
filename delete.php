<?php
include('sql_connect.php');
$con->select_db('my_db');
$sql=sprintf("DELETE FROM persons WHERE personID={$_GET['personID']}");
$con->query($sql);
header("location:index.php");
