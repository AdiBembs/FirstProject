<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 3/13/2019
 * Time: 2:55 PM
 */

class recordFactory {
    public static function create(Array $ShirtNumber = null, Array $ShirtName = null) {
        $record = new record($ShirtNumber, $ShirtName);
        return $record;
    }
}