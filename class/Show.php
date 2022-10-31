<?php

/**
 * La classe Affichage regroupe les propriétés et méthodes pour 
 * afficher un Avatar à l'aide d'un tableau
 */

class Show {

    protected float  $opacity;
    
    public function __construct()
    {
        $this->opacity = 0.8;
    }


    public function setOpacity($opacity) {
        $this->opacity = $opacity;
    }

    public function showAvatar(Avatar $obj_avatar) {
        $avatar = $obj_avatar->genAvatar();
        $size = $obj_avatar->getSize();
        $svg = '<svg width="400"  height="400" viewBox="0 0 '. $size .' '. $size .'">';
        for ($i = 0 ; $i < $size ; $i++) { 
            for ($j = 0 ; $j < $size; $j++) { 
                $svg .= '<rect x="'.$i .'" y="'. $j .'" width="1" height="1" fill="'.$avatar[$i][$j].'" opacity="' . $this->opacity .'" />';
            }
        }
        // fin du svg
        $svg .= '</svg>';
        return $svg;
    }
    

}