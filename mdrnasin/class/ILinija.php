<?php

/**
 * Created by PhpStorm.
 * User: marko
 * Date: 12.12.2018.
 * Time: 23:53
 */
interface ILinija {
    public function get_length(): float;

    public function trans_x(int $x);

    public function trans_y(int $y);
}
