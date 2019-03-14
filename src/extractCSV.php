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

        $nameOfFields = array();

        $counter = 0;


        while(! feof($file))
        {

            $record = fgetcsv($file);
            if($counter == 0) {
                $nameOfFields = $record;
            } else {
                $records[] = recordFactory::create($nameOfFields, $record);
            }
            $counter++;
        }

        fclose($file);
        return $records;

    }

}