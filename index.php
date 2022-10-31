<?php

// Déclaration du typage strict pour éviter les conversions sauvages de PHP
declare(strict_types=1);

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
$size = 8  ;
$nbColor = 4;

// methode public
// $svgAvatar = new AvatarFactory($nbColor, $size);
// $svg = $svgAvatar->new($size, $nbColor);

// methode static
$svg = AvatarFactory::new(4,2);



// $svgAvatar = SVGAvatarFactory::new(4,2);
 // Génère un avatar de taille 4 avec 2 couleurs

include 'index.phtml';

?>