<?php
abstract class Animal implements Organism {
    protected $name;
    protected $health;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function evolve(Environment $env) {
        // якась логіка еволюції для всіх тварин
    }
    
    public function mutate(Mutation $mutation) {
        $mutation->apply($this);
    }
}