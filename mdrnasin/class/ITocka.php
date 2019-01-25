<?php

interface ITocka {
    public function postavi(int $x, int $y);

    public function getkoords(): string;

    public function move_apsolute(int $x, int $y);

    public function move_relative(int $x, int $y);

    public function unisti(): bool;

    public function kloniraj(): Tocka;

    public function set_x(int $x);

    public function get_x(): int;

    public function set_y(int $y);

    public function get_y(): int;

    public function move_x(int $x);

    public function move_y(int $y);
}
