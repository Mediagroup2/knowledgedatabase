<?php
error_reporting(E_ALL ^ E_NOTICE);
 mysql_connect('localhost', 'root', '')or die ("can not connect");
 mysql_select_db('media_group2') or die ("can not connect");
   
 $titel = mysql_real_escape_string($_POST['titel']);
 $tags = mysql_real_escape_string($_POST['tags']);
 $categorie = mysql_real_escape_string($_POST['categorie']);
 $url = mysql_real_escape_string($_POST['url']);
 $beschrijving = mysql_real_escape_string($_POST['beschrijving']);
 $datum = mysql_real_escape_string($_POST['datum']);

 
if (!empty($titel) OR ($url)) {
 $query = mysql_query("INSERT INTO videos (titel, tags, categorie, url, beschrijving, datum, ) VALUES ('$titel','$tags','$categorie','$url','$beschrijving','$datum',')");
 
 echo"customer succesfully created";
 } else{
 echo "you did not define all fields";
 }
 ?>
<html>
  <a href="toevoegen_videos.php"> Terug naar videos</a>
</html>