<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 3/13/2019
 * Time: 6:28 PM
 */
declare(strict_types=1);
use FirstProject\Framework\TestCase;

final class RecordTest extends TestCase
{
    public function testConstructArraysExists() {

        $this->assertTrue(
            method_exists(record::class, '_construct')
        );
    }

    public function testReturnedArrays() {

        $record = record::returnArray("...data/data.csv",'Main');
        print_r($record);

    }

    public function testPropertyCreated() {
        print_r('value', 'name');
    }

    public function testFileObject() {
        $this->assertInstanceOf(record::class, new record());
    }

}
