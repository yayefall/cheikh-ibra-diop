
<?php
function commence_majus($chaine)
{
    if(preg_match_all("/^[A-Z]{1}[^.!?]{2,}/", $chaine))
    {
      echo $chaine;
      
    }
    else
        {
          echo "la 1ére lettre majuscule est obligatoire";
        }
}

?>

<?php
function ecrire_caracter($caracter)
{ 

if(preg_match_all("/[A-Za-z]{1}[^.!?]{5,}/", $caracter))
    {
      echo $caracter;
      
    }
    else
        {
          echo "le champs doit contenir au moins 5 caracter";
        }
}


?>
