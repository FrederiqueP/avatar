<?php

// Déclaration du typage strict pour éviter les conversions sauvages de PHP
declare(strict_types=1);

// Inclusion des dépendances
include 'functions.php';
include 'class/Shape.php';
include 'class/Rectangle.php';


// Initialiser les variables
$size = null;
$num_color = null;
$svg_width = 400;
// les couleurs de l'avatar
$colors = ['#f39c12', '#e67e22', '#d35400', '#f1c40f','#34495e'];

// tester si le formulaire est rempli
if(!empty($_POST)){
    $size = $_POST['size'];
    $num_color = $_POST['num_color'];

    // nombre de pixels par coté
    if ( (int)( $size ) != 0 ) {
        $long = (int) ($svg_width / $size);
    } else { 
        $long = 10;
    }
    if ( (int)( $num_color ) > $colors.length() ) {
        $num_color = 5;
    } 

    // position de départ du carré
    $x = 0;
    $y = 0;
   
    
    // Construction du code SVG
    $svg = '<svg width="' . $svg_width. '"  height="'. $svg_width. '">';

    for ($i = 1; $i <= $size; $i++) {
        // dessiner un carre
        $rect = new Rectangle();
        // position de départ
        $rect->setLocation($x, $y);
        // taille carré
        $rect->setSize($long, $long);
        // aléatoire couleur 
        $rect->setFill($colors[rand(0,(int)($num_color))], 0.8);
       // calcul prochaine position 
       if ($x > 400) {
            $x = 0;
       }
        $x = $x + $long;
   
        // Ajout carré
        $svg .= $rect->draw();
    }

    // fin du svg
    $svg .= '</svg>';

}

include 'index.phtml';

?>