<?php

class Products {

    private string $label = 'My Shop';
    // private int $price;
    // private string $bar_code;
    // private string $brand;

    public function __construct($price, $bar_code, $brand)
    {
        $this->$price = $price;
        $this->$bar_code = $bar_code;
        $this->$brand = $brand;
        
    }
}