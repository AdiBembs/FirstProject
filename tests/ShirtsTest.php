<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 2/28/2019
 * Time: 11:41 AM
 */
declare(strict_types=1);

use FirstProjectmaster\Framework\TestCase;

final class ShirtTest extends TestCase
{

    public function testArray()
    {

        $shirt = new Gucci();

        $ShirtColors = $shirt->shirtColorColor();
        $this->assertArrayHasKey(key: 'one', $ShirtColors);
        $this->assertArrayHasKey(key: 'two', $ShirtColors);
        $this->assertArrayHasKey(key: 'three', $ShirtColors);

    }
    public function testCanCreateGucci(): void
    {
        $shirt = new Gucci();

        $this->assertInstanceOf(expected: Gucci::class, $shirt);
    }

    public function testShirtHasBrand(): void
    {
        $this->assertclassHasAttribute('brand', Shirts::class);

    }
    public function testShirtIsFullSleeveOrLongSleeve(): void
    {
        $this->assertTrue(
            method_exists(Shirts::class, 'FullSleeveOrLongSleeve')
        );
    }

    public function testShirtIsMenOrWomensShirt(): void
    {
        $this->assertTrue(
            method_exists(Shirts::class, 'MenOrWomensShirt')
        );
    }
