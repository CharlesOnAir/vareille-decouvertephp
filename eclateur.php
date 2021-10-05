<?php
// @formatter:on
// Création d'une fonction pour découper un mot en un seul caractère
if (empty($argv[1])) {
    echo "Vous devez renseigner un premier paramètre pour continuer";
    exit;
}

function cutWorld($mot)
{
    return str_split($mot);
}

// Pour Nicolas
//var_dump(array_count_values(cutWorld($argv[1])));

echo json_encode(array_count_values(cutWorld($argv[1])));
