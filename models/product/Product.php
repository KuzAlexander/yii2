<?php

namespace app\models\product;

class Product
{
    /** @var string */
    public $name;
    /** @var string */
    public $price;
    /** @var string */
    public $description;
    /** @var ProviderRecord[] */
    public $providers = [];

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
