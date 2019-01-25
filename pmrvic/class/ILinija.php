<?php
/**
 *
 * @author pmrvic
 */
interface ILinija {
  public function get_length(): float;
  public function  trans_x(int $x);
  public function trans_y(int $y);
}
