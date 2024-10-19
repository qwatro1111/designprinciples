<?php

abstract class Figure implements Shape
{
    protected string $color;

    public function setColor(string $color): void 
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getArea();
    public function getContur();
}