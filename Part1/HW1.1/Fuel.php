<?php

class Fuel implements FuelInterface
{
    /** @var MarketInterface */
    private $market;

    /** @var Grandpa */
    private $grandpa;

    public function getFuel(Money $money)
    {
        $fuelFromMarket = $this->buyFuel($money);
        if (empty($fuelFromMarket)) {
            return $this->getFirewoods();
        }

        return $fuelFromMarket;
    }

    private function buyFuel(Money $money)
    {
        return $this->market->buyWood($money) ?? $this->market->buyCoal($money) ?? $this->market->buyPeat($money);
    }

    private function getFirewoods()
    {
        $forest = $this->grandpa->getForest();
        return $forest->cutDownTree(ForestInterface::DRY_TREE_TYPE);
    }
}