<?php

class Frame extends Figure
{
    private float $outerWidth;
    private float $outerHeight;
    private float $innerWidth;
    private float $innerHeight;

    public function __construct(string $color, float $outerWidth, float $outerHeight, float $innerWidth, float $innerHeight) 
    {
        $this->setColor($color);
        $this->outerWidth = $outerWidth;
        $this->outerHeight = $outerHeight;
        $this->innerWidth = $innerWidth;
        $this->innerHeight = $innerHeight;
    }

    public function setOuterWidth(float $outerWidth): void
    {
        $this->outerWidth = $outerWidth;
    }

    public function getOuterWidth(): float
    {
        return $this->outerWidth;
    }

    public function setOuterHeight(float $outerHeight): void
    {
        $this->outerHeight = $outerHeight;
    }

    public function getOuterHeight(): float
    {
        return $this->outerHeight;
    }

    public function setInnerWidth(float $innerWidth): void
    {
        $this->innerWidth = $innerWidth;
    }

    public function getInnerWidth(): float
    {
        return $this->innerWidth;
    }

    public function setInnerHeight(float $innerHeight): void
    {
        $this->innerHeight = $innerHeight;
    }

    public function getInnerHeight(): float
    {
        return $this->innerHeight;
    }

    public function getArea(): float
    {
        $outerArea = $this->getOuterWidth() * $this->getOuterHeight();
        $innerArea = $this->getInnerWidth() * $this->getInnerHeight();
        return $outerArea - $innerArea;
    }

    public function getPerimeter(): float
    {
        $outerPerimeter = 2 * ($this->getOuterWidth() + $this->getOuterHeight());
        $innerPerimeter = 2 * ($this->getInnerWidth() + $this->getInnerHeight());
        return $outerPerimeter + $innerPerimeter;
    }
}