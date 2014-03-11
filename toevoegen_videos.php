<?php
include 'connect.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>toevoegen_videos</title>
</head>
<body>
    <div class="container">
  <tr>
                   <th>Titel</th><br>
                   <TR>

<TD><INPUT type="text" SIZE="30"><BR></TD>
</TR>
                   <th>Tags</th><br>
        <TD><INPUT type="text" SIZE="30"><BR></TD>
                       
<Th>Categorie</Th><TD>
<form>
<input type="radio" name="verzekering" value="html">html
<input type="radio" name="verzekering" value="css">css 
<input type="radio" name="verzekering" value="php">php
<input type="radio" name="verzekering" value="jquery">jquery
<input type="radio" name="verzekering" value="psd">psd
</form>
</TD>
</TR>
                       <th>Url</th><br>
                       <TD><INPUT type="text" SIZE="30"><BR></TD>
                   <th>Beschrijving</th><br>
                   <TD><INPUT type="text" SIZE="50"><BR></TD>
                   <th>Datum</th><br>
                   <TD><INPUT type="text" SIZE="30"><BR></TD>
                   <button>Toevoegen</button> <button>Annuleren</button>
               </tr>