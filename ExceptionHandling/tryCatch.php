<?php
//try {
//    echo "Result: ".(7 % 0);
//}catch (Throwable $throwable){
//    echo $throwable->getMessage();
//}

try {
    var_dump(intdiv(PHP_INT_MAX, -1));
}catch (ArithmeticError $arithmeticError){
    echo $arithmeticError->getMessage();
}