<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Product;

class ProductTest extends TestCase
{
    public function testComputeTVA()
    {
        $product = new Product("ordi", 10, Product::FOOD_PRODUCT);
        $this->assertSame(0.55, $product->computeTVA());
    }

    public function testFunctionExits()
    {
        $product = new Product("ordi", 10, Product::FOOD_PRODUCT);
        $result = method_exists($product, "computeTVA");
        $this->assertTrue($result);
    }

    public function testInstance()
    {
        $product = new Product("ordi", 10, Product::FOOD_PRODUCT);
        $this->assertInstanceOf(get_class($product), new Product("", 10, ""));
    }

    public function testPrice()
    {
        $product = new Product("ordi", -1, Product::FOOD_PRODUCT);
        $this->expectException('Exception');
        $product->computeTVA();
    }
}
