<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 3/13/2019
 * Time: 2:06 PM
 */

class extractCSV
{


    static public function getRecords($filename) {

        $file = fopen($filename,"r");

        $fieldNames = array();

        $count = 0;


        while(! feof($file))
        {

            $record = fgetcsv($file);
            if($count == 0) {
                $fieldNames = $record;
            } else {
                $records[] = recordFactory::create($fieldNames, $record);
            }
            $count++;
        }

        fclose($file);
        return $records;

    }

}