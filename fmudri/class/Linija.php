<?php
include_once 'Tocka.php';
/**
 * Description of Linija
 *
 * @author office
 */
class Linija {
    private $t1;
    private $t2;
    public function __construct(Tocka $t1, Tocka $t2) {
        $this->t1=$t1;
        $this->t2=$t2;
    }
    
  }
