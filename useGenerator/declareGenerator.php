<?php
class Calculate{
    // regular function declare;
    public function sum($a, $b){
        return $a + $b;
    }

    // generator;
    public function get_sum($a, $b){
        yield ($a+ $b);
    }
}

$calculate = new Calculate();
var_dump($calculate->sum(10, 15));
var_dump($calculate->get_sum(5,5));