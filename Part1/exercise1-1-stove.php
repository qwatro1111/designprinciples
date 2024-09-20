<?php

class House
{
    /** @var StoveInterface */
    private $stove;

    /** @var MarketInterface */
    private $market;

    /** @var TimelineInterface */
    private $timeline;

    function heatTheHouse(Money $money)
    {
        $fuel = $this->market->buyWood($money) ?? $this->market->buyCoal($money) ?? $this->market->buyPeat($money);
        if (empty($fuel)) {
            $this->timeline->goBackYears(30);

            $forest = new Forest;
            for ($i = 0; $i < 10000; $i++) {
                $forest->plantOneTree();
            }

            $this->timeline->goForwardYears(30);

            $fuel = $forest->cutDownTree(ForestInterface::DRY_TREE_TYPE);
        }

        $this->stove->useStove($fuel);
    }
}
