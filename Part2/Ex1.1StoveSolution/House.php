<?php

class House
{
    /** @var StoveInterface */
    private $stove;

    /** @var FuelProviderInterface */
    private $fuelProvider;

    function heatTheHouse(Money $money)
    {
        $fuel = $this->fuelProvider->getFuel($money);
        $this->stove->useStove($fuel);
    }
}
