<?php

class Bober
{
    public function prepareStrawberryCakeIngredients(
        $seeds,
        Ground $ground,
        Fair $fair)
    {

        if ($seeds) {
            $ground->seed($seeds);
            if ($ground->isHarvestReady) {
                $harvest = $ground->getHarvest();
                $forSale = $harvest * 0.99;
                $forCake = $harvest - $forSale;
                $money = $fair->sell($forSale);
                if ($money) {
                    $eggs = $fair->buyEggs($money);
//...
                }
            }
        }
//...
    }
}

