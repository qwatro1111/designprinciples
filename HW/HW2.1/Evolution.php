<?php

class Evolution {
    private OrganismInterface $organism;
    private EnvironmentInterface $env;
    private Mutation $mutation;

    public function setOrganism(OrganismInterface $organism): self
    {
        $this->organism = $organism;
        return $this;
    }

    public function getOrganism(): OrganismInterface
    {
        return $this->organism;
    }

    public function setEnvironment(EnvironmentInterface $env): self
    {
        $this->env = $env;
        return $this;
    }
    
    public function getEnvironment(): EnvironmentInterface
    {
        return $this->env;
    }

    public function setMutation(Mutation $mutation): self
    {
        $this->mutation = $mutation;
        return $this;
    }
    
    public function getMutation(): Mutation
    {
        return $this->mutation;
    }

    public function simulate() {
        $this->organism->evolve($this->env);
        $this->organism->mutate($this->mutation);
    }
}