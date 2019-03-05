<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 2/28/2019
 * Time: 11:41 AM
 */
declare(strict_types=1);

use FirstProjectmaster\Framework\TestCase;

final class ShirtsTest extends TestCase
{

    public function testArray()
    {

        $shirt = new Gucci();

        $ShirtColors = $shirt->shirtColor();
        $this->assertArrayHasKey('one', $ShirtColors);
        $this->assertArrayHasKey('two', $ShirtColors);
        $this->assertArrayHasKey('three', $ShirtColors);

    }
    public function testCanCreateGucci(): void
    {
        $shirt = new Gucci();

        $this->assertInstanceOf(Gucci::class, $shirt);
    }

    public function testShirtHasBrand(): void
    {
        $this->assertclassHasAttribute('brand', Shirts::class);

    }

    public function testShirtIsHalfSleeveOrLongSleeve(): void
    {
        $this->assertTrue(
            method_exists(Shirts::class, 'HalfSleeveOrLongSleeve')
        );
    }

    public function testShirtIsMenOrWomensShirt(): void
    {
        $this->assertTrue(
            method_exists(Shirts::class, 'MenOrWomensShirt')
        );
    }

    public function testGucciIsHalfSleeveOrLongSleeve(): void
    {
        $Gucci = new Gucci();

        $this->assertEquals("", $Gucci->HalfSleeveOrLongSleeve());

    }

    public function testGucciIsMenOrWomensShirt(): void
    {
        $Gucci = new Gucci();

        $this->assertEquals("", $Gucci->MenOrWomensShirt());

    }

}
