<?php include 'connect.inc.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>zoekfunctie resultaat</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <img src="img/logo/logo.png" class="logo_zoekpagina">
     <hr />
  <div id='header_zoekpagina'>
        <form action='search.php' method='get'>
            <input type='text' name='k' id='search_veld' size='10' />
            <input type='submit' id='search_icon' value=''>
            <input type="button" id='back_button_home' value="Terug naar home" onclick="window.location.href='index.php'" />
        </form> 
           
    <hr />
    
    <?php
        $k = $_GET['k'];
        /*$i = 0;
        $terms = explode(" ", $k);*/
        $sql = "(SELECT id, tags, url_video, 'html' as type FROM html WHERE tags LIKE '%" . $k . "%') 
    UNION
    (SELECT id, tags, url_video, 'css' as type FROM css WHERE tags LIKE '%" . $k . "%')
    UNION
    (SELECT id, tags, url_video, 'psd' as type FROM psd WHERE tags LIKE '%" . $k . "%')
    UNION
    (SELECT id, tags, url_video, 'jquery' as type FROM jquery WHERE tags LIKE '%" . $k . "%')";
       
       if ( !$query = mysqli_query($con, $sql) ) {
           echo 'Kan zoekquery niet uitvoeren';
           exit();
       }
       
        echo '<h1> Zoekresultaten: </h1>';
        while ($row = mysqli_fetch_assoc($query) ) 
        {
            echo '<a href="' . $row['url_video'] .  '">' . $row['tags'] . '</a>';
            echo '<br>';
        } 
       
       
        
        
        // connect
        
        $query2 = mysqli_query($con, $query);
        
        echo $query;
        $numrows = mysqli_num_rows($query2);
        
        if ($numrows > 0) {
            while ($row = mysqli_fetch_assoc($query2)) {
                $id = $row['id'];
                $tags = $row['tags'];
                
                echo "<h2>$tags</h2>";
            }
        }
        else {
            echo "No results found for \"<b>$k</b>\"";
        }
        // disconnect
        
        
    ?>
</body>
</html>