<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise2</title>
    
</head>
<body>
<div  class=text-align:center>
<form  method="post" action="exo2.php">
 <br> <br>
<select name="langue" >
<label for="selected"> choisir une langue</label>
<option value=""> selectionner une langue</option>
<option value="français">français</option>
<option value="anglais">anglais</option>
</select>
<input type="submit" value="valider" name="bouton" />
</form></div>

<?php
include('function.php');

$tab=array('français'=>['Janvier','Fevrier','Mars','Avril','Mai','Juin',
'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
'anglais'=>['January','Feruary','March','April','Mai','Jun','July','August',
'September', 'October','November','December']);


if(isset($_POST['bouton'])){
  
    $langue=$_POST['langue'];

    if(empty($langue)){
        echo"il faut choisir une langue";
    }
    else{
        
        
        (langue($tab, $langue));
 }
 
 }



  
?>


</body>
</html>













