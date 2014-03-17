<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>zoekfunctie resultaat</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action='./search.php' method='get'>
        <input type='text' name='k' size='10' value="<?php echo $_GET['k']; ?>" />
        <input type='submit' value='Search'>
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