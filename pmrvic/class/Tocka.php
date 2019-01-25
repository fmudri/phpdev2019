<?php
include_once './ITocka.php';
/**
 * Description of Tocka
 *
 * @author pmrvic
 */
class Tocka implements ITocka {
  private $x;
  private $y;
  private $history= [];
  /**
   * Kreira novu točku sa koordinatama x i y
   * @param int $x koordinata x
   * @param int $y koordinata y
   */
  public function __construct(int $x=0,int $y=0) {
    //array_push($this->history, [$x,$y]);
    $this->postavi($x, $y);
  }
  
  public function get_x(): int {
    return $this->x;
  }

  public function get_y(): int {
    return $this->y;
  }

  public function getkoords(): string {
    return 'Koordinata('.$this->x.', '.$this->y.')';   
  }

  public function kloniraj(): Tocka {
    $temp_tocka=new Tocka($this->x, $this->y);
    return  $temp_tocka;
  }

  public function move_apsolute(int $x, int $y) {
    $this->postavi($x, $y);
    array_push($this->history, [$x,$y]);
  }

  public function move_relative(int $x, int $y) {
    $this->x = $this->x + $x;
    $this->y += $y;
    array_push($this->history, [$this->x,$this->y]);
  }

  public function postavi(int $x, int $y) {
    $this->x=$x;
    $this->y=$y;
    array_push($this->history, [$this->x,$this->y]);
  }

  public function set_x(int $x) {
    $this->x = $x;
    array_push($this->history, [$this->x,$this->y]);
  }

  public function set_y(int $y) {
    $this->y= $y;
    array_push($this->history, [$this->x,$this->y]);
  }

  public function unisti(): bool {
    // $this->x= 0;
    // $this->y= 0;
    $this->history=[];
    $this->postavi(0,0);
    return true;
  }
  public function __toString() {
    $text='<hr><span style="font-weight:bold">Tocka '
      .$this->getkoords().'</span>';
    $text.='<br>Povijest:<br>';
    $text.='<ul>';
    foreach ($this->history as $v) {
      $text.='<li>['.$v[0].','.$v[1].']</li>';
    }
    $text.='</ul>';
    return $text; 
  }

  public function move_x(int $x) {
    $this->x+=$x;
  }

  public function move_y(int $y) {
    $this->y+=$y;
  }

}
