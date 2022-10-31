<?php

// Déclaration du typage strict pour éviter les conversions sauvages de PHP
declare(strict_types=1);

// Inclusion des dépendances
include 'class/Avatar.php';
include 'class/Show.php';


/**
 * Réception des données Formulaire
 *  - Choix des couleurs
 *  - Taille
 */

// Initialisation les variables (depuis le formulaire)
$size = 8  ;
$num_color = 4;
// les couleurs de l'avatar
$colors = ['#AA3939', '#550000', '#D46A6A', '#801515'];


// Instanciation Avatar , génération
$avatar = new Avatar($colors,$size);
// $avatar->genAvatar($size, $num_color, $colors);

// Instanciation Affichage Avatar 
$show = new Show();
//$show->showAvatar(array $avatar, int $size, float $opacity);
$svg = $show->showAvatar($avatar);

include 'index.phtml';

?>