<?php
$servername = "localhost";
$dBEmail = "root";
$dBPassword = "";
$dBName = "eseuriba_loginsystem";
$conn = mysqli_connect($servername, $dBEmail, $dBPassword, $dBName);
if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
