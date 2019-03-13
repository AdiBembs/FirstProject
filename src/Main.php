<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 3/13/2019
 * Time: 12:07 PM
 */

//Main::start("../Data/data.csv");

class Main
{
    static public function start($filename) {

        $records = extractCSV::getRecords($filename);
        $table = html::generateTable($records);


    }

}