<?php
class Products{
    protected string $name = "Product Name";
    protected  string $size = "Product Size";
    protected float $price = 0.0;

    public function getName():string{
        return $this->name;
    }
    public function getSize():string{
        return $this->size;
    }
    public function getPrice():float{
        return $this->price;
    }
    // write method;
    public function setName($name){
        if (is_string($name) && strlen($name)<64){
            $this->name = (string)$name;
        }else{
            $this->name = substr((string)$name, 0, 64);
        }
    }
    public function setSize($size){
        if (is_string($size) && strlen($size) < 16){
            $this->size = (string)$size;
        }else{
            $this->size = substr((string)$size, 0, 16);
        }
    }
    public function setPrice($price){
        if (is_numeric($price)){
            $this->price = (float)$price;
        }else{
            $this->price = 0.0;
        }
    }
    public function showInfo(){
        echo "Product: " .$this->name ."\n";
        echo "Size: " .$this->size ."\n";
        echo "Price: " .$this->price ."\n";
    }

}
$shirt = new Products();
$shirt->setName("Polo");
$shirt->setSize("M");
$shirt->setPrice(2590.0);

$shirt->showInfo();