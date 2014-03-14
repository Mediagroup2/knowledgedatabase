<?php

mysql_connect('localhost', 'root', '')or die ("can not connect");
mysql_select_db('media_group2') or die ("database fout");




if ($categorie == 1) {
     $queryFetch = mysql_fetch_array($query);
     session_start();
  $_SESSION['categorie'] = $queryFetch['categorie'];
 //$_SESSION['userip'] = $_SERVER['REMOTE_ADDR'];
 if ($queryFetch ['categorie'] == 'html'){
 header ('location: admin.php');
} else 
 if ($queryFetch ['categorie'] == 'php'){
 header ('location: finance.php');
} else 
 if ($queryFetch ['categorie'] == 'css'){
 header ('location: sales.php');
} else 
 if ($queryFetch ['categorie'] == 'psd'){
 header ('location: development.php');
 }else
  if ($queryFetch ['categorie'] == 'jquery'){
 header ('location: development.php');
} else {
     header ('location: index.html');
      }
}
?>