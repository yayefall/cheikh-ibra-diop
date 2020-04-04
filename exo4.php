<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
<h2 style=" color:green">saisir des phrases</h2>
<form action="" method="post">
    <textarea name="mot"  cols="70" rows="15" style=""></textarea> <br> <br>
    <input type="submit" value= "valider" name="bouton" style=" background-color:green">
</form>
</body>
</html>


<?php

include('fonction-exo4.php');

if (isset($_POST['bouton'])) 

{
    if (empty($_POST['mot']) || (is_numeric($_POST['mot'])))
    
    {
       echo"il est vide , saisir un mot";
    }
    else
        {
           $resultat=CorrigePhrases($_POST['mot']);
          echo' <html>';
               echo' <textarea name="" id="" cols="70" rows="15" redonly>';
                foreach($resultat as $phrase)

                {
                    if (strlen($phrase)<=200) 
                    {
                        echo $phrase;
                    } else
                        {
                            echo " Cette phrase depasse les 200 caractéres autorisés";
                        }

                }
                echo'</textarea>';
           echo '</html>';
        }
        

}

?>