<?php

/**
 * La classe Avatar regroupe les propriétés et méthodes pour 
 * préparer un Avatar dans un tableau
 */

class Avatar {

    protected int $size;
    protected array $colors;
    
    public function __construct(array $colors, int $size=null)
    {
        $this->size = $size??8;
        $this->colors = $colors;
    }
    public function getSize () {
        return $this->size;
    }

    public function genAvatar() {
        $table_avatar = [];
        $symetrie = $this->size / 2;
    
        // construire la table
        for ($i = 0 ; $i <= $symetrie ; $i++) {
            for ($j = 0 ; $j < $this->size; $j++) {
                $rand_color = $this->colors[rand(0, count($this->colors)-1)];
                $table_avatar [$i][$j] = $rand_color;
                // case miroir ( /:\ attention au premier $size - $i, où $i est à zéro)
                $miror = $this->size -$i -1;
                $table_avatar [$miror][$j] = $rand_color;
            }
        }
        return $table_avatar;
    }
}