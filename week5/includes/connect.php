<?php 
  // connect to the database
  $connect = mysqli_connect("localhost", "root","root",'HTTP5225');
  if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>