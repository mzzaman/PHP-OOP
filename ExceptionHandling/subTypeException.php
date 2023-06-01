<?php
class Laptop{
    private array $configrations = array("MBP", "2.6GHZ", "16GB", "512SSD");
    public function getConfirurations(int $index){
        if (!isset($this->configrations[$index])){
            throw new OutOfBoundsException(sprintf("The index %s is not within the array size!!", $index));
        }else{
            return $this->configrations[$index];
        }

    }

}

try {
    $dell = new Laptop();
    echo $dell->getConfirurations(6);
}catch (OutOfBoundsException $outOfBoundsException){
    echo $outOfBoundsException->getMessage();
}
