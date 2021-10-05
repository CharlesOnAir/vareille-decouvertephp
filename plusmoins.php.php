<?php
$nombreVie = 5;
// Création d'une fonction pour interroger l'utilisateur
function getNumberOfUser() {
    return readline(PHP_EOL."Entrez un nombre : ");
}
// Création d'une fonction pour récupérer le nombre aléatoire
function getNumber($mini = 1, $max = 50) {
    return rand($mini, $max);
}
// Création d'une fonction pour vérifier la position du numéro
function getOrder($numero, $userNumber) {
    if (!is_int($userNumber)) {
        // Gérer si l'utilisateur rentre autre chose qu'un chiffre
        return 'errNumber';
    }
    if (empty($userNumber)) {
        return 'errEmpty';
    }
    if ($numero > $userNumber) {
        // Gérer plus
        return 'plus';
    }else if ($numero < $userNumber) {
        // Gérer moins
        return 'moins';
    }else if ($numero == $userNumber) {
                // Gérer égalité
                return 'ok';
            }
}
// Je stock le numéro
$number = getNumber();

for ($i = 0; $i <= $nombreVie; $i++) {
    // J'interroge l'utilisateur
    $userNumber = (int) getNumberOfUser();
    $resultat = getOrder($number, $userNumber);
    if ($resultat == 'errNumber') {
        echo "Vous devez choisir un chiffre, vous n'avez pas perdu de vie";
    }else if ($resultat == 'plus') {
        echo "Aïe, mauvaise réponse ! C'est plus ! Vous venez de perdre une vie.";
    }else if ($resultat == 'moins') {
        echo "Aïe, mauvaise réponse ! C'est moins ! Vous venez de perdre une vie.";
    }else if ($resultat == 'ok') {
        echo "Bravo, vous avez trouvé le bon chiffre, vous avez de gagné !";
        exit;
    }else if ($resultat == 'errEmpty') {
        echo "Vous devez renseigner une valeur ! Vous n'avez pas perdu de vie !";
    }
}