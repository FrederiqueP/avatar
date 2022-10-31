<?php

// Déclaration du typage strict pour éviter les conversions sauvages de PHP
declare(strict_types=1);

// Inclusion des dépendances

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

/**
 * Préparation de l'avatar
 */
function genAvatar(int $size, int $num_color, array $colors) {
    $table_avatar = [];
    $symetrie = $size / 2;

    // construire la table
    for ($i = 0 ; $i <= $symetrie ; $i++) {
        for ($j = 0 ; $j < $size; $j++) {
            $rand_color = $colors[rand(0, $num_color-1)];
            $table_avatar [$i][$j] = $rand_color;
            // case miroir ( /:\ attention au premier $size - $i, où $i est à zéro)
            $miror = $size -$i -1;
            $table_avatar [$miror][$j] = $rand_color;
        }
    }
    return $table_avatar;
}

/**
 * Affichage de l'avatar
 */

function showAvatar(array $table_avatar, int $size) {

    $svg = '<svg width="400"  height="400" viewBox="0 0 '.$size .' '.$size.'">';
    for ($i = 0 ; $i < $size ; $i++) { 
        for ($j = 0 ; $j < $size; $j++) { 
            $svg .= '<rect x="'.$i .'" y="'. $j .'" width="1" height="1" fill="'.$table_avatar [$i][$j].'" opacity="0.8" />';
        }
    }
    // fin du svg
    $svg .= '</svg>';
    return $svg;
}

$svg = showAvatar(genAvatar($size, $num_color, $colors), $size);

include 'index.phtml';

?>