<?php
class WelcomeUser{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function setName(string $name):string{
        $this->name = $name;
    }
    public function getName(string $name):string{
        return $this->name = $name;
    }
    public function showInfo():string{
        return "Welcome Mr. ".$this->name ."\n";
    }
}


class Employee{
    private $name = "";
    private $user = null;
    public function __construct($name, WelcomeUser $user)
    {
        $this->name = $name;
        $this->user = $user;
    }

    public function __clone(): void
    {
        $this->user  = clone $this->user;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getUser(){
        return $this->user;
    }
    public function showEmployeeInfo(){
        echo "\n Employee Name: ".$this->name ."\n";
        echo "Login Status: \n";
        $this->user->showInfo();
    }
}

$user = new  WelcomeUser("Devil");
$tanos = new Employee("Thanos", $user);
$superMan = clone $tanos;
$superMan->setName("SuperMan");
