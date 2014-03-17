<?php include 'connect.inc.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Media-Group2</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!--    <link rel="stylesheet" href="/resources/demos/style.css">-->

<link rel="shortcut icon" type="image/png" href="img/logo/download.jpg">
<head>  
 
 <div class="container1">
     <header>
     
     <div class="rss">
<script type="text/javascript" src="http://output32.rssinclude.com/output?type=js&amp;id=842603&amp;hash=4ad2fdd941d12df65194405f5dafa086"></script>

</div>
          <figure id="slideshow">
            
                <img src="img/pasfoto/Dean.png" class="active" alt="banner-radius">
                <img src="img/pasfoto/Mitch.png" alt="banner-radius">
                <img src="img/pasfoto/Remmert.jpg" alt="banner-radius">
                <img src="img/pasfoto/jesse.jpg" alt="banner-radius">
               
            </figure>
     
     
     <div class="call-to-action1">
    <img src="img/logo/logo.png" class="logo">
      
      
      <div id="zoekfunctie">
        <form action='search.php' method='get'>
        <input type='text' name='k' id='search_veld' size='10' />
        <input type='submit' id='search_icon' value=''>
      </form> 
</div>                   
        
      <div id="mainNav">
    <nav>
        <ul>
            <li>
                HTML
                <ul>
                    <li class="scroll">Tutorial
                    <table border="1">
                    <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT titel FROM html');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['titel'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                             <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT link FROM html');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['link'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
                     <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT url_video FROM html');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['url_video'] . '</td>';
                }
                    ?>
                     <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                </ul>
            </li>
    </nav>
</div> 
      <div id="mainNav">        
    <nav>
        <ul>
            <li>
                PHP
              <ul>
                    <li class="scroll">Tutorial
                    <table border="1">
                    <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT titel FROM php');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['titel'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                             <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT link FROM php');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['link'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
                     <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT url_video FROM php');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['url_video'] . '</td>';
                }
                    ?>
                     <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                </ul>
            </li>
    </nav>
</div>  
<div id="mainNav"> 
    <nav>
        <ul>
            <li class="CSS">
                CSS
              <ul>
                    <li class="scroll">Tutorial
                    <table border="1">
                    <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT titel FROM css');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['titel'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                             <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT link FROM css');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['link'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
                     <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT url_video FROM css');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['url_video'] . '</td>';
                }
                    ?>
                     <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                </ul>
            </li>
    </nav>
</div>      
<div id="mainNav"> 
    <nav>
        <ul>
            <li>
                PSD
              <ul>
                    <li class="scroll">Tutorial
                    <table border="1">
                    <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT titel FROM psd');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['titel'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                             <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT link FROM psd');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['link'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
                     <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT url_video FROM psd');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['url_video'] . '</td>';
                }
                    ?>
                     <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                </ul>
            </li>
    </nav>
</div>  
<div id="mainNav"> 
    <nav>
        <ul>
            <li>
                JQuery
<ul>
                    <li class="scroll">Tutorial
                    <table border="1">
                    <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT titel FROM jquery');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['titel'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                             <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT link FROM jquery');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['link'] . '</td>';
                }
                    ?>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
                     <?php
                    include 'connect.inc.php';
                   $query = mysqli_query($con, 'SELECT url_video FROM jquery');
               
                while ($row= mysqli_fetch_assoc($query)){
                echo '<tr>';
            
                 echo '<td>' . $row['url_video'] . '</td>';
                }
                    ?>
                     <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                </ul>
            </li>
        </nav>
    </div>  
      </header>
   </head>
    <body>
          
<div id="dialog" title="Toevoegen">

<button id="toevoeg1">html</button></p>
<button id="toevoeg2">php</button></p>
<button id="toevoeg3">css</button></p>
<button id="toevoeg4">psd</button></p>
<button id="toevoeg5">jquery</button></p>


</div>
<button id="opener">Voeg toe!</button>

        
<div id="dialog2" title="Toevoegen van html"><?php include 'toevoegen_html.php'; ?></div>
<div id="dialog3" title="Toevoegen van php"><?php include 'toevoegen_php.php'; ?></div>
<div id="dialog4" title="Toevoegen van css"><?php include 'toevoegen_css.php'; ?></div> 
<div id="dialog5" title="Toevoegen van psd"><?php include 'toevoegen_psd.php'; ?></div> 
<div id="dialog6" title="Toevoegen van jquery"><?php include 'toevoegen_jquery.php'; ?></div> 
        
        <script src="script.js"></script>
   
 
    </body>
    <footer>
        
        <div id="footer">
            <marquee behavior="scroll" direction="left" scrollamount="6">Site is made by : Dean Vermeulen Mitch Walravens Jesse Peffer Remmert KLoppenburg. MEDIA GROUP 2</marquee>
        </div>
    
        
    </footer>

</div>
</html>