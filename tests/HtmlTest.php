<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 3/13/2019
 * Time: 6:23 PM
 */

declare(strict_types=1);
use FirstProject\Framework\TestCase;

final class HtmlTest extends TestCase
{
    public function testFileObject() {
        $this->assertInstanceOf(html::class, new HtmlTest());
    }

    public function testReadable()
    {
        $this->assertFileIsReadable('/Users/Aditya/PhpstormProjects/FirstProject/src/html');
    }
}