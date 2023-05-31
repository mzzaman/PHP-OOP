<?php
interface Greeting {
    public function greet();
}

class English implements Greeting{
    public function greet()
    {
        // TODO: Implement greet() method.
        return "\n English: Hello \n";
    }
}
class German implements Greeting{
    public function greet()
    {
        // TODO: Implement greet() method.
        return "\n German: Hallo \n";
    }
}
class French implements Greeting{
    public function greet()
    {
        // TODO: Implement greet() method.
        return "\n French: Bonjour \n";
    }
}

// create object;
$greeters = [
    new English(),
    new German(),
    new French(),

];
// call the function;
greeting($greeters);
// show message;
function greeting ($greeters){
    foreach ($greeters as $greeter){
        echo $greeter->greet();
    }
}