<?php
// Abstract Class Declaration;
abstract class Dumper{
    // Abstract Method;
    abstract public function dump($data);
}

// inherit Dumper Class;
class WebDumper extends Dumper{
    public function dump($data)
    {
        // TODO: Implement dump() method.
        echo PHP_EOL;
        var_dump($data);
        echo PHP_EOL;

    }
}

$webDumper = new WebDumper();
$webDumper->dump('PHP Abstract class is awesome');