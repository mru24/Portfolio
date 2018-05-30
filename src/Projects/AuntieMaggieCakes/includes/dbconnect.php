<?php

// LOCALHOST

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wwproject_c0_pl";

// WWPROJECT WEBSITE

// $servername = "mysql.cba.pl";
// $username = "wwproject.c0.pl";
// $password = "Previad4d2006";
// $dbname = "wwproject_c0_pl";

$dbc = mysqli_connect($servername,$username,$password,$dbname);
if ($dbc->connect_error) {
  die("Connection with Database failed.");
}
