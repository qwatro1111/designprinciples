<?php

class Rectangle extends Figure 
{
    private float $width;
    private float $height;

    public function __construct(string $color, float $width, float $height) 
    {
        $this->setColor($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function setWidth(float $width): void 
    {
        $this->width = $width;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setHeight(float $height): void 
    {
        $this->height = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getArea(): float
    {
        return $this->getWidth() * $this->getHeight();
    }

    public function getContur(): float
    {
        return ($this->getWidth() + $this->getHeight()) * 2;
    }
}