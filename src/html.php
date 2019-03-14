<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 3/13/2019
 * Time: 3:55 PM
 */

class html
{
    public static function generateTable($records) {

        $counter = 0;

        foreach ($records as $record) {

            if($counter == 0) {

                $array = $record->record::returnArray();
                $fields = array_keys($array);
                $values = array_values($array);
                print_r($fields);
                print_r($values);

            } else {
                $array = $record->record::returnArray();
                $values = array_values($array);
                print_r($values);
            }
            $counter++;
        }
    }
}