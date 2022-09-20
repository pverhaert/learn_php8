<?php

namespace classes;

class Number
{
    private $x;

    public function __construct(float|int $x)
    {
        $this->x = $x;
    }

    public function add(float|int $y): Number
    {
        $this->x += $y;
        return $this;       // make method chainable
    }

    public function multiply(float|int $y): Number
    {
        $this->x *= $y;
        return $this;       // make method chainable
    }

    public function printInfo(): Number
    {
        echo "<p>\$x = $this->x</p>\n";
        return $this;       // make method chainable
    }
}
