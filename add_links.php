<?php
include 'connect.inc.php';
error_reporting(E_ALL ^ E_NOTICE);
 mysql_connect('localhost', 'root', '')or die ("can not connect");
 mysql_select_db('media_group2') or die ("can not connect");
   
 $titel = mysql_real_escape_string($_POST['titel']);
 $tags = mysql_real_escape_string($_POST['tags']);
 $categorie = mysql_real_escape_string($_POST['categorie']);
 $url = mysql_real_escape_string($_POST['url']);
 $beschrijving = mysql_real_escape_string($_POST['beschrijving']);
 $toegevoegd_op = mysql_real_escape_string($_POST['toegevoegd_op']);
  $queryEdit = mysql_query("UPDATE links SET titel = '$titel', tags = '$tags', categorie = '$categorie', url = '$url', beschrijving = '$beschrijving', toegevoegd_op = '$toegevoegd_op', WHERE id= '$id'");
  if ($queryEdit) {
           header('location: toevoegen_links.php');

  }
if (!empty($titel) OR ($url)) {
 $query = mysqli_query($con, "INSERT INTO links (titel, tags, categorie, url, beschrijving, toegevoegd_op) VALUES ('$_POST[titel]','$_POST[tags]','$_POST[categorie]','$_POST[url]','$_POST[beschrijving]','$_POST[toegevoegd_op]')");
  mysql_close();
 echo"Video succesvol toegevoegd";
 } else{
 echo "Je hebt niet alle velden ingevuld";
 }
 ?>
<html>
  <a href="toevoegen_links.php"> Terug naar videos</a>
</html>