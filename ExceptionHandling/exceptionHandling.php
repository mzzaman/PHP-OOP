<?php
//function getRemainder(int $value1, int $value2):int | string{
//    try {
//        return $value1 / $value2;
//    }catch (DivisionByZeroError $divisionByZeroError){
//        return $divisionByZeroError;
//    }
//}
//echo "Remainder is: ".getRemainder(15, 0);
//echo PHP_EOL;
function getRemainder(int $value1, int $value2):int | string{
    try {
        return $value1 / $value2;
    }catch (DivisionByZeroError $divisionByZeroError){
        return "0";
    }
}
echo "Remainder is: ".getRemainder(15, 0);
echo PHP_EOL;