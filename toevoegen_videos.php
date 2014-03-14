<?php
include 'connect.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>toevoegen_videos</title>
</head>
<body>
    <div class="container">
    <form action="add_videos.php" method="post">
    Titel <input type="text" name="titel" placeholder="insert titel"><br>
        Tags   <input type="text" name="tags" placeholder="insert tags"><br>
Categorie<input type="text" name="categorie" placeholder="insert categorie"><br>

                        <br>
                        Url   <input type="text" name="url" placeholder="insert url"><br>
                      Beschrijving  <input type="text" name="beschrijving" placeholder="insert beschrijving"><br>
                   Datum    <input type="date" name="toegevoegd_op" placeholder="datum"><br>
                     <input type="submit" value="Toevoegen">
                     <input type="submit" value="Annuleren">
                     </form>
               </tr>
                 </div>
                 </html>
                 <?php
                 
error_reporting(E_ALL ^ E_NOTICE);
include ('connect.inc.php');

$querySelect = mysql_query("SELECT * FROM videos");
  $query = mysqli_query($con, "INSERT INTO videos (titel, tags, categorie, url, beschrijving, toegevoegd_op) VALUES ('$_POST[titel]','$_POST[tags]','$_POST[categorie]','$_POST[url]','$_POST[beschrijving]','$_POST[toegevoegd_op]')");

echo "<table><tr><td>titel</td><td>tags</td><td>categorie</td><td></td>";
               
$queryFetch = ($querySelect);
 echo "<tr><td>".$queryFetch['titel']."</td>";
 echo "<td>".$queryFetch['tags']."</td>";
    echo "<td>".$queryFetch['categorie']."</td>";
    echo "<td>".$queryFetch['url']."</td>";
    echo "<td>".$queryFetch['beschrijving']."</td>";
    echo "<td>".$queryFetch['toegevoegd_op']."</td>";
                
                 ?>