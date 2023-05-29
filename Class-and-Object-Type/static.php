<?php
class DBConnection2{
    static private int $instance_count = 0;
    private int $connection_count = 0;
    public function __construct()
    {
        self::$instance_count++;
        $this->connection_count++;
    }
    public function getInstanceCount():int{
        return self::$instance_count;
    }
    public function getConnectionCount():int{
        return $this->connection_count;
    }
    public function getInstanceCountIncrease():int{
        return self::$instance_count++;
    }
    public function getConnectionCountIncrease():int{
        return $this->connection_count++;
    }
}
$db1 = new DBConnection2();
$db2 = new DBConnection2();

// set Value;
$db1->getInstanceCountIncrease();
$db1->getConnectionCountIncrease();


echo "Value in Instance 1: \n"."Instance Count: ".$db1->getInstanceCount()." Connection Count: ".$db1->getConnectionCount();
echo "\n Value in Instance 2: \n"."Instance Count: ".$db2->getInstanceCount()." Connection Count: ".$db2->getConnectionCount();