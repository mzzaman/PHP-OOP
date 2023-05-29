<?php
class Sample{
    function __construct(){
        print "Constructing ...... \n";
        $this->name = "Sample";
    }
    function __destruct(){
        print "Destructing ...... " .$this->name ."\n";
    }

}
$obj = new Sample();
$obj->name = "Obj";
$obj1 = new Sample();
$obj1->name = "Obj1";
unset($obj);
echo "Before script exits.......\n";