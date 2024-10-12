<?php
interface Mutation {
    public function apply(Animal $animal);
}