<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 3/13/2019
 * Time: 2:55 PM
 */

class recordFactory {
    public static function create(Array $fieldNames = null, Array $values = null) {
        $record = new record($fieldNames, $values);
        return $record;
    }
}