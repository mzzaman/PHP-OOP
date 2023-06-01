<?php
trait TaxCalculatorTrait{
    public function calculateTax(){
        echo "TaxCalculatorTrait: calculateTax() \n";
    }
    public function show(){
        echo "TaxCalculatorTrait: show() \n";
    }
}

trait LoggerTrait{
    public function log($log_message){
        echo "LoggerTrait: log() \n";
    }
    public function show(){
        echo "LoggerTrait: show() \n";
    }
}

class ProductInfo{
//    use TaxCalculatorTrait;
//    use LoggerTrait; //error;
use TaxCalculatorTrait, LoggerTrait{
    TaxCalculatorTrait::show insteadof LoggerTrait;
    LoggerTrait::show as showLog;
}
}

$product = new ProductInfo();
$product->calculateTax();
$product->show();
$product->showLog();