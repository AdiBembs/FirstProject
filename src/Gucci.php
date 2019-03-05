<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 3/1/2019
 * Time: 10:52 AM
 */

class Gucci extends Shirts
{
    public function HalfSleeveOrLongSleeve(String $input) :String
    {
        if(strpos($input, "full"))
        {
            echo("The Shirt is Full Sleeves");
        }
        else if(strpos($input, "half")){
            echo("The Shirt is Half Sleeves");
        }
    }

    public function MenOrWomenShirt(String $input) :String
    {
        if(strpos($input, "men"))
        {
            echo("This shirt is for males");
        }
        else if(strpos($input, "women")){
            echo("This shirt is for females");
        }
    }
}