<?php

/**
 * Description of ITocka
 *
 * @author office
 */
interface ITocka {
    public function setup(int $x,int $y);//postavi koordinate tocke x,y
    public function getkoords():string;//procitaj koordinate tocke x,y
    //apsolute krece od (0,0)
    public function move_apsolute(int $x,int $y);//pomakni koordinate tocke x,y
    //relative krece od trenutnog polozaja tocke
    public function move_relative(int $x,int $y);//pomakni koordinate tocke x,y
    public function delete():bool;//obrisi tocku
    public function kloniraj():Tocka;//kloniraj tocku
    public function set_x(int $x);
    public function set_y(int $y);
    public function get_x(): int;
    public function get_y(): int;


}
