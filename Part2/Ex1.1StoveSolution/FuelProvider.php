<?php
class FuelProvider implements FuelProviderInterface
{
    /** @var TheGranny */
    private $grandpa;

    /** @var MarketInterface*/
    private $market;

    public function __construct(TheGranny $grandpa, MarketInterface $market)
    {}

    public function getFuel(Money $money) : StoveFuelInterface
    {
        $fuel = $this->buyAvailableFuel($money);

        if (empty($fuel)) {
            $fuel = $this->getSomeWoodFromTheForest();
        }

        return $fuel;
    }

    private function buyAvailableFuel(Money $money) : ?StoveFuelInterface
    {
        return $this->market->buyWood($money) ?? $this->market->buyCoal($money) ?? $this->market->buyPeat($money);
    }

    private function getSomeWoodFromTheForest() : StoveFuelInterface
    {
        $forest = $this->grandpa->growUpForestInThePast();
        return $forest->cutDownTree(ForestInterface::DRY_TREE_TYPE);
    }
}
