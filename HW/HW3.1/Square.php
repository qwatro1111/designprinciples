<?php

class Square extends Figure 
{
    private float $side;

    public function __construct(string $color, float $side) 
    {
        $this->setColor($color);
        $this->side = $side;
    }

    public function setSide(float $side)
    {
        $this->side = $side;
    }

    public function getSide(): float
    {
        return $this->side;
    }

    public function getArea(): float 
    {
        return $this->getSide() * $this->getSide();
    }

    public function getContur(): float
    {
        return $this->getSide() * 4;
    }
}