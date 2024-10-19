<?php

class Triangle extends Figure
{
    private float $base;
    private float $height;
    private float $side;

    public function __construct(string $color, float $base, float $height, float $side) 
    {
        $this->setColor($color);
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase(float $base): void
    {
        $this->base = $base;
    }

    public function getBase(): float
    {
        return $this->base;
    }

    public function setHeight(float $height): void
    {
        $this->base = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setSide(float $side): void
    {
        $this->side = $base;
    }

    public function getSide(): float
    {
        return $this->side;
    }

    public function getArea(): float 
    {
        return ($this->getBase() * $this->height) / 2;
    }

    public function getContur(): float
    {
        return 2 * $this->getSide() + $this->getBase();
    }
}