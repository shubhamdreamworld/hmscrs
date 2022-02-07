<?php
  session_start();
  $servername = "sql671.main-hosting.eu"; //change this  accordingly
  $dBUsername = "u429173902_hms";
  $dBPassword = "Admin@7011";
  $dBName = "u429173902_hms";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
