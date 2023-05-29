<?php
class Product{
    private string $name;
    private float $price;
    public function __construct(){
        echo "Hello I am Construct Function \n";
    }
    public function __destruct(){
        echo "Hello I am Destruct Function \n";
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice( $price){
        $this->price = $price;
    }
    public function showInfo(){
        echo "Name: ".$this->name ."\n";
        echo "Price: ".$this->price ."\n";
    }
}
$apple = new Product();
$apple->setName('Apple');
$apple->setPrice(200.0);
$apple->showInfo();

$mango = new Product();
$mango->setName('Gopalvog');
$mango->setPrice(80);
$mango->showInfo();