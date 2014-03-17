<?php
$con = mysqli_connect('localhost','root', 'root','media_group2');// Je maakt connectie met database doormiddel van je gegevens van je database hier in te zetten.

if (mysqli_connect_error()) { 
    echo "kan geen connectie maken met database"; 
    exit();//Als je geen connectie krijgt kan jij er een error aan geven.
}


?>