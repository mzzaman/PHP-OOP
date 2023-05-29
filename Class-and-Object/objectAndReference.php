<?php
class User{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function setName(string $name):string{
        return $this->name = $name;
    }
    public function showInfo():string{
        return "Welcome Mr. ".$this->name ."\n";
    }
}
$mzzaman = new User('mzzaman');
$mzzaman->setName('Devil');
echo $mzzaman->showInfo();