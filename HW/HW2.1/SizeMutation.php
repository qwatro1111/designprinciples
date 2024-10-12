<?php
class SizeMutation implements Mutation {
    protected $sizeIncrease;
    
    public function __construct($sizeIncrease) {
        $this->sizeIncrease = $sizeIncrease;
    }
    
    public function apply(Animal $animal) {
        echo "The animal " . get_class($animal) . " is mutating by increasing size by " . $this->sizeIncrease . " units.\n";
    }
}