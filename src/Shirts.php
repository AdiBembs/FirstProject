<?php
declare(strict_types=1);

abstract class Shirts
{
    public $brand;
    public $size;
    public $material;
    public $manufacturingYear;
    public $makeLocation;

    public function HalfSleeveOrLongSleeve(String $input) :String
    {

    }

    public function MenOrWomenShirt(String $input) :String
    {

    }

    public function shirtColor() :array
    {
        $array = [
            'one' => 'blue',
            'two' => 'green',
            'three'=> 'red'
        ];

        return $array;
    }
}