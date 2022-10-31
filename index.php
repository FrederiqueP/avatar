<?php

require 'vendor/autoload.php';

// dump($variable) : affiche le contenu d'une variable ou d'une expression de manière détaillée



// Inclusion des dépendances
include 'class/AvatarMatrix.php';
include 'class/SvgAvatarRenderer.php';
include 'class/AvatarFactory.php';


/**
 * Réception des données Formulaire
 *  - Choix des couleurs
 *  - Taille
 */

// Initialisation les variables (depuis le formulaire)
$size    = 4;
$nbColor = 2;

dump($_POST);

// Tester si le formulaire est rempli
if(!empty($_POST)){
    $size = $_POST['size'];
    $nbColor = $_POST['nbColor'];

    // methode public
    // $svgAvatar = new AvatarFactory($nbColor, $size);
    // $svg = $svgAvatar->new($size, $nbColor);

    // methode static
    $svg = AvatarFactory::new($size,$nbColor);


}

include 'index.phtml';

?>