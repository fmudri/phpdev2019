<?php

/**
 * Description of Tocka
 *
 * @author office
 */
include_once './Tocka.php';
class Tocka implements ITocka {
    private $x;
    private $y;
    /**
     * Kreira novu točku sa koordinatama x i y
     * @param int $x koordinata x
     * @param int $y koordinata y
     */
    public function __construct(int $x=0,int $y=0) {
        $this->setup($x, $y);
    }
    
    public function delete(): bool {
        $this->x=0;
        $this->y=0;
    }

    public function get_x(): int {
      return $this->x;    
    }

    public function get_y(): int {
      return $this->y;
              
    }

    public function getkoords(): string {
       return'Koordinata('.$this->x.', '.$this->y.')'; 
    }

    public function kloniraj(): Tocka {
       $temp_tocka=new Tocka($this->x, $this->y);
        return $temp_tocka;
    }

    public function move_apsolute(int $x, int $y) {
        $this->setup($x, $y);
    }

    public function move_relative(int $x, int $y) {
        $this->x = $this->x + $x;
        $this->y +=$y;//ova i gornja linija su iste naredbe
    }

    public function set_x(int $x) {
        $this->x = $x;
    }

    public function set_y(int $y) {
        $this->y = $y;
    }

    public function setup(int $x, int $y) {
        $this->x=$x;
        $this->y=$y;
    }

}
