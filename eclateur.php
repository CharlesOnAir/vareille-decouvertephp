<?php
// @formatter:on
if (empty($argv[1])) {
    echo "Vous devez renseigner un premier paramètre pour continuer";
    exit;
}
// Création d'une fonction pour découper un mot en un seul caractère
function cutWorld($mot)
{
    return str_split($mot);
}

// J'utilise ma fonction pour le découper
$tbl = cutWorld($argv[1]);
// Je déclare un tableau
$motEclate = array();

// Je boucle sur mon tableau
foreach (array_count_values($tbl) as $key => $mot) {
    $motEclate[$key] = $mot;
}
// Je met dans l'ordre mon tableau
ksort($motEclate);
// Je boucle sur mon nouveau tableau
foreach ($motEclate as $key => $mot) {
    echo $key . ' => ' . $mot . PHP_EOL;
}
