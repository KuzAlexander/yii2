<?php

namespace app\models\product;

class Provider
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}