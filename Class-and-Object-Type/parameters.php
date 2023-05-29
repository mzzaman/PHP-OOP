<?php
class ProductRam{
    private string $name = "";
    private float $price = 0.0;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        echo "\n Constructing ".$this->name ."\n";
    }
    public function __destruct()
    {
        echo "\n Destructing ".$this->name ."\n";
    }

    public function setName(string $name):string{
        return $this->name;
    }
    public function setPrice(float $price):float{
        return $this->price;
    }
    public function showInfo(){
        echo "Name: ".$this->name ."\n";
        echo "Price: " .$this->price ."\n";
    }
}

$corsiar = new ProductRam("Corsiar 8 Gb", 3500.0);
$corsiar->showInfo();
$adata = new ProductRam("Adata 8 Gb", 3300.00);
$adata->showInfo();
