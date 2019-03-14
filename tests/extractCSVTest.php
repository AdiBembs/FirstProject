<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 3/13/2019
 * Time: 7:05 PM
 */
declare(strict_types=1);
use FirstProject\Framework\TestCase;

final class extractCSVTest extends TestCase

{
    public function testDataDirectory() {

        $this->assertDirectoryExists('data');

    }

    public function testCSVFileExists() {

        $this->assertFileExists('data/data.csv');

    }

}

