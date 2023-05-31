<?php
class Customer{
//    private $name;//can not access child class;
protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    protected function format():string{
        return ucwords($this->name);
    }
    public function getName():string{
        return $this->format($this->name);
    }

}
class VIP extends Customer{
    protected function format(): string
    {
        return strtoupper($this->name);
    }
}
//$bob = new Customer('bob allen');
//echo $bob->getName(); //bob allen;
$alex = new VIP('bob ferguson');
echo $alex->getName();