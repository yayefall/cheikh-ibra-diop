

<?php
// fonction F1
function TrouvePhrase($chaine)
{ 
    if (preg_match_all("#^[A-Z]{1}[^?.!]*[!.?)]$#",$chaine))
    {
      echo $chaine."    ::::";
      echo "Est une phrase";
      echo "<br>";
    }
    else
        {
        echo $chaine."    ::::";
        echo "Ce n'est pas une phrase.";
        echo "<br>";
        }
}


  ?>


<?php  
// fonction F2
function TrouvePhrasecorrecte($chaine)
{
	//Nous allons tenter de recuperer l'ensemble des phrases qui respectent les regles.
	preg_match_all("#[A-Z]{1}[^.!?]*[.!?]#m", $chaine,$phrase);
	//Affichage des phrases correctes
	echo "<pre>";
	print_r($phrase[0]);
	echo "</pre>";
}




?>


}
<?php
// fonction F3
function CorrigePhrases($texte)
{
//Nous allons tenter de recuperer l'ensemble des phrases.
preg_match_all("#[A-Za-z]{1}([^.!?]|([.][0-9]))*[.!?]#m", $texte,$phrases);
//Recuperation des phrases et l'insertion dans un tableau...
  foreach ($phrases[0] as $value)
  {
    $value = preg_replace('#\s\s+#'," ", $value);// c'est une     espace
    $value = preg_replace('#\’\s+#',"’", $value);// C’  est
    $value = preg_replace('#\s+\’#',"’", $value);//C  ’est
    $value = preg_replace('#\'\s+#',"'", $value);//C'  est
    $value = preg_replace('#\s+\'#',"'", $value);//C  'est
    $value = preg_replace('#\(\s+#',"(", $value);//(   je suis belle)
    $value = preg_replace('#\s+\)#', ")",$value);//(je suis juste extraordinaire   )
    $value = preg_replace('#\s+,#', ",", $value);// une femme ambitieuse   ,que suis je
    $value = preg_replace('#,\s+#', ",", $value);//une femme battante,   que suis je
    $value = preg_replace('#\s+\.#', ".",$value);//il faut toujours etre patient  .
    $Tableau[]= $value;
  }
  foreach ($Tableau as $value)
  {
    if (preg_match("#^[a-z]#", $value))
    {
        $b=strtoupper($value[0]);
        $value = preg_replace("#^[a-z]#",$b, $value);
        $TabCorrige[] =$value; 
    }
        else
        {
            $TabCorrige[] =$value; 
        }
        
  }
return  $TabCorrige;
}
?>

