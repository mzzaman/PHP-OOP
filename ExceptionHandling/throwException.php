<?php
function divided(int $x, int $y):int {
    if (!is_numeric($x) || !is_numeric($y)){
        throw new InvalidArgumentException("Both argument must be numbers or numeric string");
    }
    if ($y == 0){
        throw new Exception("Division by zero, y cannot be zero");
    }
    return $x / $y;
}
$div = divided(10, 0);
echo $div;