<?php
// Je récupère les données dans les arguments
$arguments = $argv;
// Je dégage le premier argument
array_shift($arguments);
// Je crée un tableau
$datas = array();
// Je boucle sur le tableau
foreach($arguments as $argument) {
    // Je push mes données dans mon tableau
    array_push($datas, $argument);
}
// Je retourne le json_encode du tableau
echo json_encode($datas);