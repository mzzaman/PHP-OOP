<?php
namespace Customer;
class Customer
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }
}
