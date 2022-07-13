<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chat";

  $connection = mysqli_connect($hostname, $username, $password, $dbname);
   if (!$connection) {
     echo "Database connection failed" . mysqli_connect_error();
   }
?>