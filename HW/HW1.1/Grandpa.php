<?php

class Grandpa  
{
    /** @var TimelineInterface */
    private $timeline;

    public function getForest()
    {
        $this->timeline->goBackYears(30);
        $forest = $this->plantForest()
        $this->timeline->goForwardYears(30);

        return $forest;
    }

    private function plantForest(int $trees = 10000): ForestInterface
    {
        $forest = new Forest;
        for ($i = 0; $i < ; $i++) {
            $forest->plantOneTree();
        }

        return forest;
    }
}