<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 3/13/2019
 * Time: 6:17 PM
 */
declare(strict_types=1);
use FirstProject\Framework\TestCase;

final class MainTest extends TestCase

{
    public function testMainObject() {

        $this->assertInstanceOf(Main::class, new Main());

    }


}