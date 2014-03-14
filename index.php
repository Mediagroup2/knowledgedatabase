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
 
 <div class="container">
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
      <div id="mainNav">
    <nav>
        <ul>
            <li>
                HTML
                <ul>
                    <li class="scroll">Turtorial
                    <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
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
                    <li class="scroll">Turtorial
                    <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
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
                    <li class="scroll">Turtorial
                    <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table>
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
                    <li class="scroll" >Turtorial
                    <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table border="1">
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table border="1">
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
                    <li class="scroll" >Turtorial
                    <table>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Links
                     <table>
                    <tr>
                    <td width="205">-</td>
                    </tr>
                    </table>
                    </li>
                    <li class="scroll">Video's
                    <table>
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
    <body>
    
    </head>

        
<div id="dialog" title="Toevoegen">

<button id="toevoeg">html</button></p>
<button id="toevoeg">php</button></p>
<button id="toevoeg">css</button></p>
<button id="toevoeg">psd</button></p>
<button id="toevoeg">jquery</button></p>


</div>
<button id="opener">Voeg toe!</button>

        
<div id="dialog2" title="Toevoegen van Links"><?php include 'toevoegen_links.php'; ?></div>
<div id="dialog3" title="Toevoegen van Turtorials"><?php include 'toevoegen_tutorials.php'; ?></div>
<div id="dialog4" title="Toevoegen van Videos"><?php include 'toevoegen_videos.php'; ?></div>      
        <script src="script.js"></script>
   
 
    </body>
    <footer>
        
        <div id="footer">
            <marquee behavior="scroll" direction="left" scrollamount="6">Site is made by : Dean Vermeulen Mitch Walravens Jesse Peffer Remmert KLoppenburg. MEDIA GROUP 2</marquee>
        </div>
    
        
    </footer>

</div>
</html>