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
    static public function start($nameOfFile) {

        $records = extractCSV::getRecords($nameOfFile);
        $table = html::generateTable($records);


    }

}