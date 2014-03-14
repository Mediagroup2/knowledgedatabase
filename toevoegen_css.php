<?php
include 'connect.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>toevoegen_jquery</title>
</head>
<body>
    <div class="container">
    <form action="add_css.php" method="post">
     <input type="text" name="titel" placeholder="insert titel"><br>
           <input type="text" name="tags" placeholder="insert tags"><br>
 <input type="text" name="url_video" placeholder="insert tags"><br>
                           <input type="text" name="link" placeholder="url"><br>
                        <input type="text" name="beschrijving" placeholder="insert beschrijving"><br>
                       <input type="date" name="datum" placeholder="datum"><br>
                     <input type="submit" value="Toevoegen">
                     <input type="submit" value="Annuleren">
                     </form>
               </tr>
                 </div>
                 </html>
                 <?php
                $querySelect = mysql_query("SELECT * FROM css");
$queryFetch = ($querySelect);
 echo "<tr><td>".$queryFetch['titel']."</td>";
 echo "<td>".$queryFetch['tags']."</td>";
    echo "<td>".$queryFetch['url_video']."</td>";
    echo "<td>".$queryFetch['link']."</td>";
    echo "<td>".$queryFetch['beschrijving']."</td>";
    echo "<td>".$queryFetch['toegevoegd_op']."</td>";
                
                 ?>