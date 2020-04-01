
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
<link rel="stylesheet" href="style.css">

</head>

<body style="text-align:center">
<div style="width:400px;height:200px;background-color:rgba(0, 128, 122, 0.774);">
    <!-- c'est pour centrer le formulaire  -->
    <h2>Saisir une valeur (Nombre de mot à ecrire)</h2>
    <form method= "post" action="">
        <input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])){echo$_POST['nombre'];}?>"> <br> <br>
        <!-- pour mettre un gros champs de saisi on utilise(textarea) au lieu de(input)-->
        <input type="submit" value= "valider" name="bouton" style="background-color:blue">
    </form>
</div>




<?php

include('fonction1.php');

if(isset($_POST["bouton"]))
{

    if(empty($_POST['nombre']) || !is_numeric($_POST['nombre'] ))
    {
        echo "Saisir un nombre";
    }

    $nombre=$_POST["nombre"];
    echo"<form action='' method='post'>";
    for($i=1; $i<= $nombre; $i++)

    {

        echo "<div class='modou'><input class='doudou' type='text' name='mot$i' placeholder='Mot $i'> </div>";
        
    }
    echo"<input type='hidden' name='num' value='$nombre'>";
    echo "<input type='submit'  name='envoie' value='envoyer' style='background-color: red'></form>";
}
if(isset($_POST["envoie"]))
{
    $cpt=0;
    echo "Saisir un mot ";
}
if(isset($_POST['mot1']))
{
     for ($i=1; $i <= $_POST['num'] ; $i++)
    { 

        $mot=$_POST["mot$i"];

        if(is_valide($mot))
        {
            if(taille_chaine($mot)<=20 )
            {
                if(verifie_m($mot))
                {
                    echo $mot. $cpt++."<br>";
                }else
                    {
                       echo "ce mot ne contient pas de m <br>";
                    }
            }else
                {
                    echo"la taille ne doit pas dépassée 20 caractéres<br>";
                }

        }else
            {
                echo "ce mot est invalide<br>";
            }
    }
echo "le nombre de lettre contenant m est $cpt";
}  
