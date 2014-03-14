
<?php
include 'connect.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>toevoegen_tutorials</title>
<body>
       <div class="container2">
    <form action="add_tutorials.php" method="post">
     <input type="text" name="titel" placeholder="insert titel"><br>
           <input type="text" name="tags" placeholder="insert tags"><br>
<input type="radio" name="verzekering" value="html">html
<input type="radio" name="verzekering" value="css">css 
<input type="radio" name="verzekering" value="php">php
<input type="radio" name="verzekering" value="jquery">jquery
<input type="radio" name="verzekering" value="psd">psd
                           <input type="text" name="url" placeholder="url"><br>
                        <input type="text" name="beschrijving" placeholder="insert beschrijving"><br>
                       <input type="date" name="datum" placeholder="datum"><br>
                     <input type="submit" value="Toevoegen">
                     <input type="submit" value="Annuleren">
                     </form>
               </tr>
                 </div>
                 </html>
                 <?php
                $querySelect = mysql_query("SELECT * FROM tutorials");
$queryFetch = ($querySelect);
 echo "<tr><td>".$queryFetch['titel']."</td>";
 echo "<td>".$queryFetch['tags']."</td>";
    echo "<td>".$queryFetch['categorie']."</td>";
    echo "<td>".$queryFetch['url']."</td>";
    echo "<td>".$queryFetch['beschrijving']."</td>";
    echo "<td>".$queryFetch['toegevoegd_op']."</td>";
                
                 ?>