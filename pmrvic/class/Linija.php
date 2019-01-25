<?php

include_once './Tocka.php';
include_once './ILinija.php';

/**
 * Description of Linija
 *
 * @author pmrvic
 */
class Linija implements ILinija {

  private $t1;
  private $t2;

  public function __construct(Tocka $t1, Tocka $t2) {
    $this->t1 = $t1;
    $this->t2 = $t2;
  }

  public function __toString() {
    return '<br>Linija '
      . $this->t1->getkoords()
      . '----'
      . $this->t2->getkoords()
      . ' duljina:'
      . $this->get_length();
  }

  public function get_length(): float {
    $raz_x = $this->t2->get_x() - $this->t1->get_x();
    $raz_y = $this->t2->get_y() - $this->t1->get_y();
    return sqrt($raz_x * $raz_x + pow($raz_y, 2));
  }

  public function trans_x(int $x) {
    //$this->t1->move_relative($x, $this->t1->get_y());
    //$this->t2->move_relative($x, $this->t2->get_y());
    $this->t1->move_x($x);
    $this->t2->move_x($x);
  }

  public function trans_y(int $y) {
    $this->t1->move_y($y);
    $this->t2->move_y($y);
  }

}
