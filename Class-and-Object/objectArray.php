<?php
class Consultant{
    private string $name, $role;
    public function __construct(string $name, string $role)
    {
        $this->name = $name;
        $this->role = $role;
    }
//    public function setName(string $name):string{
//        return $this->name = $name;
//    }
//    public function setRole(string $role):string{
//        return $this->role = $role;
//    }
    public function showConsultant():string{
        return "Name: ".$this->name."\n"
            ."Role: " .$this->role."\n";
    }
}
$data = [];
$devil = new Consultant("Devil", "Play Actor");
$data[] = $devil;
$hello = new Consultant("Hello", "World");
$data[] = $hello;
$php = new Consultant('Php', "Hypertext Pre Processor");
$data[] = $php;
$i = 1;
foreach ($data as $info){
    echo "\n Role # " . $i .": \n";
    echo $info->showConsultant();
    $i++;
}

