<?php

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});


interface ISquare
{
    function squareArea(float $sideSquare);
}

interface ICircle
{
    function circleArea(float $circumference);
}

class Circle implements ICircle
{
    public function circleArea(float $circumference)
    {
    }
}

class Square implements ISquare
{
    public function squareArea(float $sideSquare)
    {
    }
}

interface IAreaAdapter
{
    public function area();
}

class SquareAdapter implements IAreaAdapter
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function area()
    {
        $diagonal = sqrt(2) * $this->side;

        return (new SquareAreaLib())->getSquareArea($diagonal);
    }

}

class CircleAdapter implements IAreaAdapter
{
    private $circumference;

    public function __construct($circumference)
    {
        $this->circumference = $circumference;
    }

    public function area()
    {
        return (new CircleAreaLib())->getCircleArea($this->circumference / M_PI);
    }

}

$test = new CircleAdapter(31.41593);
echo $test->area() . PHP_EOL;

$test2 = new SquareAdapter(5);
echo $test2->area() . PHP_EOL;
