<?php
class CircleOne{
    protected int $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function radius():int{
        return $this->radius;
    }

    /**
     * @throws Exception
     */
    public function area():int{
        if ($this->radius <= 0){
            throw new Exception("Invalid Radius: ".$this->radius);
        }else{
            return pi() * $this->radius * $this->radius;
        }

    }
}

$radius_array = array(5, -2, -5, 3);
foreach ($radius_array as $radius){
    try {
        $circle = new CircleOne($radius);
        echo "\nCircle Radius: " . $circle->radius() . " Area: " . $circle->area();
        echo "\n";
    }catch (Exception $exception){
        echo "Caught Exception: ".$exception->getMessage();
    }
}
