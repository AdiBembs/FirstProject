<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 3/13/2019
 * Time: 6:29 PM
 */
declare(strict_types=1);
use FirstProject\Framework\TestCase;

final class recordFactoryTest extends TestCase
{

    public function testCreatesArrayExists() {

        $this->assertTrue(
            method_exists(Main::class, 'recordFactory')
        );
    }

    public function testReadCSVtoArray() {

        $record = Main::recordFactory("Data/data.csv",'Shirts');
        print_r($record);

    }
}