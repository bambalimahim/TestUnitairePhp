<?php
namespace App\Entity;

class Product
{
    const FOOD_PRODUCT = "food";
    private $price;
    private $name;
    private $type;

    public function __construct($name, $price, $type) {
        $this->name = $price;
        $this->price = $price;
        $this->type = $type;
    }

    public function computeTVA()
    {
        if ($this->price < 0)
        {
            throw new \Exception("price dont is negative");
        }
        if (self::FOOD_PRODUCT == $this->type)
        {
            return $this->price * 0.055;
        }
        return $this->price * 0.199;
    }
}