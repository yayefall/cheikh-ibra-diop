<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX.PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<form action="" method="post">

        <div class="tableau">
                <table>

                        <tr>
                            <td>
                        <strong>  Nom :</strong>  
                            </td>
                            <td>
                            <input type="text" name="nom" placeholder="Entrer votre nom">
                            </td>
                        </tr><br>

                        <tr>
                        <td>
                        <strong> Prénom :</strong>    
                        </td>
                            <td>
                                <input type="text" name="prenom" placeholder="Entrer votre prénom">
                            </td>
                        </tr><br>

                        <tr>
                            <td>
                            <strong>Adresse :</strong>     
                            </td>
                            <td>
                                <input type="text" name="adresse" placeholder="Entrer votre adresse">
                            </td>
                        </tr><br>

                        <tr>
                        <td>
                        <strong> Numéro :</strong> 
                        </td>
                                <td>
                                <input type="phone" name="numero" placeholder="77.......">
                                </td>
                        </tr><br>
                        
                        <tr>
                            <td>
                            <strong> Confirmation de numéro :</strong> 
                            </td>
                                <td>
                                <input type="phone" name="numero" placeholder="77.......">
                                </td>
                        </tr>

                        <tr>
                            <td>
                            <strong> Genre :</strong>
                            </td>
                            <td>
                                <select >
                                    <option>Homme</option>
                                    <option>Femme</option>
                                </select>
                        </td>
                        </tr>

                        <tr>
                            <td> 
                                <strong> Satisfait :</strong>     
                            </td>
                            <td> 
                                <input type="radio" name="satisfait"> Oui
                                <input type="radio" name="satisfait"> Non 
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <strong> Langue : </strong>
                            </td>
                                <td>
                                <input type="checkbox" name="langue" > Anglais <br>
                                <input type="checkbox" name="langue" > Français <br>
                                <input type="checkbox" name="langue" > Espagnole <br>
                                <input type="checkbox" name="langue" > Portugais
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <strong>Commentaire : </strong>
                            </td>
                            <td>
                            <textarea name="commentaire" id="" cols="40" rows="8"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td >
                                <input type="submit" value=" Valider" name="valider" class="valider">
                                <input type="submit" value=" Réinitialiser" name="reinitialiser" class="initialiser">
                            </td>
                        </tr>
                </table>
        </div>

</form>
    
</body>
</html>


<?php 

include('fonction.php');

if (isset($_POST['valider']) && (isset($_POST['reinitialiser'])))

{
 if(empty($_POST['nom']) || empty($_POST['prenom']))

    {
     echo "<p style='color:red'> champs obligatoire</p>";
        
    }
    else
    {

        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        if(commence_majus($nom,$prenom))
        
        {
        echo $nom. $prenom;
        }else
        {
            echo " ce n'est pas correcte";
        }
    }





}



?>