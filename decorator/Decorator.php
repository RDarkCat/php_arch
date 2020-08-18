<?php

interface IBurger
{
    public function make();
}

class Meat implements IBurger
{
    protected $burger;

    public function __construct(IBurger $burger)
    {
        $this->burger = $burger;
    }

    public function make()
    {
        echo "-=====-".PHP_EOL;
        $this->burger->make();
    }
}

class Top implements IBurger
{
    protected $burger;

    public function __construct(IBurger $burger)
    {
        $this->burger = $burger;
    }

    public function make()
    {
        echo "/=====\\".PHP_EOL;
        $this->burger->make();
    }
}

class Bottom implements IBurger
{
    public function make()
    {
        echo "\=====/".PHP_EOL;
    }
}

$createBurger = new Top(new Meat(new Bottom()));
echo $createBurger->make();