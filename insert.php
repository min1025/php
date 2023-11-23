<?php
include('sql_connect.php');
$con->select_db('my_db');
$con->query("INSERT INTO persons(FirstName,LastName,Age)VALUES('perter','Griffin','35')");
$con->query("INSERT INTO persons(FirstName,LastName,Age)VALUES('Gleen','Quagmire','33')");
