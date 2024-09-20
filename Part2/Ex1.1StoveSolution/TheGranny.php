<?php
class TheGranny
{
    /** @var Timeline */
    private $timeline;

    public function growUpForestInThePast(): ForestInterface
    {
        $this->timeline->goBackYears(30);
        $forest = new Forest;
        for($i=0; $i <10000; $i++){
            $forest->plantOneTree();
        }

        $this->timeline->goForwardYears(30);
        return $forest;
    }
}
