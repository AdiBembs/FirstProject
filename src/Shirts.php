<?php
declare(strict_types=1);

abstract class Shirts
{
    public $brand;
    public $size;
    public $material;
    public $manufacturingYear;
    public $makeLocation;

    public function FullSleeveOrLongSleeve() :boolean
    {

    }

    public function MenOrWomensShirt() :boolean
    {

    }

    public function shirtColorColor() :array
    {
        $array = [
            'one' => 'blue',
            'two' => 'green',
            'three'=> 'red'
        ];

        return $array;
    }
}