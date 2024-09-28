<?php

class House
{
    /** @var StoveInterface */
    private $stove;

    /** @var FuelInterface */
    private $fuel;

    function heatTheHouse(Money $money)
    {
        $this->stove->useStove($this->fuel->getFuel($money));
    }
}
