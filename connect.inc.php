<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect('localhost','root', '','media_group2');// Je maakt connectie met database doormiddel van je gegevens van je database hier in te zetten.
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

  
?>
