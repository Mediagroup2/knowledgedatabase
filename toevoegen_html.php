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
    <form action="add_html.php" method="post">
    
<input type="text" name="titel_link" placeholder="insert titel_link"><br>
           
<input type="text" name="link" placeholder="url"><br>


<input type="text" name="titel_tutorial"  placeholder="beschrijving"><br>

<input type="text" name="titel_tutorial" placeholder="titel_tutorial">

<input type="text" name="url_tutorial"  placeholder="url_tutorial">


<input type="text" name="titel_video" placeholder="insert titel_video"><br>

<input type="text" name="url_video" placeholder="insert url_video"><br>

<input type="text" name="tags" placeholder="insert tags"><br>



                       <input type="date" name="toegevoegd_op" placeholder="datum"><br>
                     <input type="submit" name="submit" value="Toevoegen">
                    <!-- <input type="submit" value="Annuleren">-->
                     </form>
               </tr>
                 </div>
                 </html>
                 <?php
                $querySelect = mysql_query("SELECT * FROM html");
$queryFetch = ($querySelect);
 echo "<tr><td>".$queryFetch['titel_link']."</td>";
 echo "<td>".$queryFetch['tags']."</td>";
    echo "<td>".$queryFetch['url_video']."</td>";
    echo "<td>".$queryFetch['link']."</td>";
    echo "<td>".$queryFetch['titel_tutorial']."</td>";
            echo "<td>".$queryFetch['url_tutorial']."</td>";
        echo "<td>".$queryFetch['toegevoegd_op']."</td>";
        echo "<td>".$queryFetch['titel_video']."</td>";
    
                 ?>