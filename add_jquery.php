<?php
include 'connect.inc.php';
error_reporting(E_ALL ^ E_NOTICE);
 mysql_connect('localhost', 'root', '')or die ("can not connect");
 mysql_select_db('media_group2') or die ("can not connect");
   
 $titel_link = mysql_real_escape_string($_POST['titel']);
 $tags = mysql_real_escape_string($_POST['tags']);
 $url_video = mysql_real_escape_string($_POST['url_video']);
 $link = mysql_real_escape_string($_POST['link']);
 $beschrijving = mysql_real_escape_string($_POST['beschrijving']);
 $toegevoegd_op = mysql_real_escape_string($_POST['toegevoegd_op']);
   $titel_video = mysql_real_escape_string($_POST['titel_video']);
  $queryEdit = mysql_query("UPDATE css SET titel_link = '$titel_link', tags = '$tags', url_video = '$url_video', link = '$link', beschrijving = '$beschrijving', toegevoegd_op = '$toegevoegd_op', titel_video = '$titel_video',WHERE id= '$id'");
  if ($queryEdit) {
           header('location: toevoegen_jquery.php');

  }
if (!empty($titel) OR ($url)) {
 $query = mysqli_query($con, "INSERT INTO css (titel_link, tags, url_video, link, beschrijving, toegevoegd_op) VALUES ('$_POST[titel_link]','$_POST[tags]','$_POST[url_video]','$_POST[link]','$_POST[beschrijving]','$_POST[toegevoegd_op]','$_POST[titel_video]')");
  mysql_close();
 echo" Succesvol toegevoegd!";
 } 
 ?>
<html>
<a href="index.php"> Terug naar home</a>
</html>