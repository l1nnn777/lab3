<?php
namespace App;

class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move(float $dx, float $dy): void
    {
        $this->x += $dx;
        $this->y += $dy;
    }
}
