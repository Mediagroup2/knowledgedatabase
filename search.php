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
        $i = 0;
        $terms = explode(" ", $k);
        $query = "SELECT * FROM zoekfunctie WHERE ";
        
        foreach ($terms as $each) {
            $i++;
            if ($i == 1)
                $query .= "tags LIKE '%$each%' ";
            else
                $query .= "OR tags LIKE '%$each%' ";    
        }
        
        // connect
        
        mysql_connect("localhost", "root", "");
        mysql_select_db("media_group2");
        
        $query = mysql_query($query);
        $numrows = mysql_num_rows($query);
        if ($numrows > 0) {
            while ($row = mysql_fetch_assoc($query)) {
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