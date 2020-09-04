<?php


class Socks
{
    private $size;
    private $price;

    public function __construct($size, $price)
    {
        $this->size = $size;
        $this->price = $price;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size): void
    {
        $this->size = $size;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

}