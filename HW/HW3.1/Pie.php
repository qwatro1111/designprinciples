<?php

class Pie extends Figure  
{
    private float $radius;
    private int $angle;

    public function __construct(string $color, float $radius, float $angle) {
        $this->setColor($color);
        $this->radius = $radius;
        $this->angle = $angle;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }   
    
    public function setAngle(float $angle): void
    {
        $this->angle = $angle;
    }

    public function getAngle(): float
    {
        return $this->angle;
    } 

    public function getArea(): float 
    {
        return ($this->getAngle() / 360) * pi() * $this->getRadius() * $this->getRadius();
    }

    public function getContur(): float 
    {
        $arcLength = ($this->getAngle() / 360) * 2 * pi() * $this->getRadius();
        return 2 * $this->getRadius() + $arcLength;
    }
}