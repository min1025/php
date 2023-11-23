<?php
include_once('sql_connect.php');

if ($con->query('CREATE DATABASE my_db')) {
  echo "database created";
} else {
  echo "Error creating datebase :{$con->error}";
}

$con->select_db('my_db');
$sql = "CREATE TABLE persons
(
  personID int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(personID),
  FirstName varchar(15),
  LastName varchar(15),
  Age int
)";

$con->query($sql);
$con->close();
