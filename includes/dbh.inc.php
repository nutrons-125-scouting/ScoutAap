<<?php
//change if using online server
//do $servername = "localhost"; if used locally
$servername = "localhost";
$dBUsername = "root";
$dBPasswrod = "";
$dBName = "nutrons_scout_gamer";

$conn = mysqli_connect($servername, $dBUsername, $dBPasswrod, $dBName);

if (!conn) {
  die("Connection failed: ".mysqli_connect_error());

}
