<?php
//PHP polymorphism using an abstract class;
abstract class Person{
    abstract public function greet();
}
class English extends Person{
    public function greet()
    {
        // TODO: Implement greet() method.
        return "\n English: Hello\n";
    }
}
class German extends Person{
    public function greet()
    {
        // TODO: Implement greet() method.
        return "\nGerman: Hallo \n";
    }
}
class France extends Person{
    public function greet()
    {
        // TODO: Implement greet() method.
        return "\n France: Bonjour! \n";
    }
}
class American extends Person{
    public function greet()
    {
        // TODO: Implement greet() method.
        return "\n American: Hi \n";
    }
}

function greeting ($people){
    foreach ($people as $person){
        echo $person -> greet();
    }
}
$people =[
    new English(),
    new German(),
    new France(),
    new American()
];
greeting($people);