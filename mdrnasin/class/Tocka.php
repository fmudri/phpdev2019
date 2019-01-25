<?php
include_once "ITocka.php";

class Tocka implements ITocka {
    private $x = 0;
    private $y = 0;

    public function __construct(int $x, int $y) {
        $this->postavi($x, $y);
    }

    public function postavi(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __destruct() {

    }

    public function get_koords(): string {
        return 'Koordinata (' . $this->x . ',' . $this->y . ')';
    }

    public function moveaps(int $x, int $y) {
        $this->postavi($x, $y);
    }

    public function unisti(): bool {

    }

    public function kloniraj(): Tocka {
        $temp = new Tocka($this->x, $this->y);
        return $temp;
    }

    public function get_x(): int {
        return $this->x;
    }

    public function set_x(int $x) {
        $this->x = $x;
    }

    public function get_y(): int {
        return $this->y;
    }

    public function set_y(int $y) {
        $this->y = $y;
    }

    public function move_relative(int $x, int $y) {

    }
}