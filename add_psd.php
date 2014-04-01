<?php
include 'connect.inc.php';
	//error_reporting(E_ALL ^ E_NOTICE);
	  
	if (isset($_POST['submit'])) {
		
		$titel_link = mysqli_real_escape_string($con, $_POST['titel_link']);
	 $tags = mysqli_real_escape_string($con, $_POST['tags']);
	 $url_video = mysqli_real_escape_string($con, $_POST['url_video']);
	 $link = mysqli_real_escape_string($con, $_POST['link']);
	 $titel_tutorial = mysqli_real_escape_string($con, $_POST['titel_tutorial']);
	 $toegevoegd_op = mysqli_real_escape_string($con, $_POST['toegevoegd_op']);	
	  $titel_video = mysqli_real_escape_string($con, $_POST['titel_video']);
 $url_tutorial = mysqli_real_escape_string($con, $_POST['url_tutorial']);
	 	  
	 	
	/*  $queryEdit = mysql_query("UPDATE psd SET titel_link = '$titel_link', tags = '$tags', url_video = '$url_video', link = '$link', titel_tutorial = '$titel_tutorial', url_video = '$url_video', toegevoegd_op = '$toegevoegd_op', titel_video = '$titel_video',WHERE id= '$id'");
 	  if ($queryEdit) {
 	           header('location: toevoegen_psd.php');


  }*/

 $query = mysqli_query($con, "INSERT INTO psd (titel_link, tags, url_video, link, titel_tutorial, toegevoegd_op, titel_video, url_tutorial) VALUES ('$titel_link','$tags','$url_video','$link','$titel_tutorial','$toegevoegd_op','$titel_video','url_tutorial')") or die('sql query werkt voor geen meter....');
//  mysqli_close();
  echo "Succesvol toegevoegd!";
 } else {

echo 'If statement werkt niet' . var_dump($_POST);
} 



 ?>
<html>
<a href="index.php"> Terug naar home</a>
</html>