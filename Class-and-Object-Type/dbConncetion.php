<?php
class DBConnection{
    private $instance_count = 0;
    private $connection_count = 0;

    public function getInstanceCount(){
        return $this->instance_count;
    }
    public function getConnectionCount(){
        return $this->connection_count;
    }

    public function increaseConnectionCount(){
        $this->connection_count ++;
    }
    public function increaseInstanceCount(){
        $this->instance_count++;
    }
}
// create object;
$dbc1 = new DBConnection();
$dbc2 = new DBConnection();
// set value for one object;
$dbc1->increaseInstanceCount();
$dbc1->increaseConnectionCount();
echo "Value in Instance 1: \n" ."Instance Count: ".$dbc1->getInstanceCount()." Connection Count: ".$dbc1->getConnectionCount();
echo "\nValue in Instance 2: \n" ."Instance Count: ".$dbc2->getInstanceCount()." Connection Count: ".$dbc2->getConnectionCount();
