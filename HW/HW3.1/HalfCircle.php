<?php

class Circle extends Figure 
{
    private float $radius;

    public function __construct(string $color, float $radius) 
    {
        $this->setColor($color);
        $this->radius = $radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getArea(): float
    {
        return (pi() * $this->getRadius() * $this->getRadius()) /2;
    }

    public function getContur(): float
    {
        return (2 * pi() * $this->getRadius()) / 2;
    }
}