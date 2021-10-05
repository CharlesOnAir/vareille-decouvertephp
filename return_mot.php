<?php
//@formatter:on

// Phrase à retourner
function askUser()
{
    return readline("Veuillez entrer une phrase à retourner : ");
}

// Je crée une fonction qui va retourner le mot à l'envers
function returnMot($mot)
{
    return strrev($mot);
}

// Je crée une fonction qui découpe la phrase de l'utilisateur
function phraseToArray($phrase)
{
    return explode(" ", $phrase);
}

$phrase = askUser();
// Je vérifie si l'utilisateur à bien entré un message
if (empty($phrase)) {
    var_dump($phrase);
    echo "Erreur : Vous devez rentrer une valeur" . PHP_EOL;
    askUser();
}

// Si c'est le cas, je viens découper la phrase de l'utilisateur
$phrase = phraseToArray($phrase);
// Je déclare le tableau qui va contenir les nouvelles données
$phraseReturn = array();
// Je boucle sur le tableau
foreach ($phrase as $mot) {
    array_push($phraseReturn, returnMot($mot));
}
// Je retourne le résultat
echo implode(" ", $phraseReturn);

