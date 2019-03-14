
<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 3/13/2019
 * Time: 3:00 PM
 */

class record {

    public function __construct(Array $ShirtNumber = null, $ShirtName = null )
    {
        $record = array_combine($ShirtNumber, $ShirtName);

        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }

    }

    public function returnArray() {
        $array = (array) $this;

        return $array;
    }

    public function createProperty($shirtNumber = 'one', $shirtName = 'Gucci Strawberry Print') {

        $this->{$shirtNumber} = $shirtName;

    }
}