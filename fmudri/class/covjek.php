<?php

/**
 * Description of covjek
 *
 * @author office
 */
class covjek {

    public $ime = "Marko";
    public $broj;
    private $spol = 'm';
    public $trenutna_brzina = 0;

    public function ime() {
        echo 'Moje ime je' . $this->ime . '<br>';
    }

    public function hodaj() {
        
    }

    public function trci() {
        
    }

    public function stani() {
        
    }

    public function komuniciraj(covjek $cov) {
        $cov->trenutna_brzina += 2;
    }

    public function get_spol() {
        if ($this->spol == 'm') {
            return 'muško';
        } else {
            return 'žensko';
        }
    }

    public function set_spol() {
        return $this->spol = $s;
    }

}
