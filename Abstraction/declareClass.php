<?php
abstract class Shape{
    protected static $id;
    public function __construct($id)
    {
        self::$id = $id;
    }
    abstract public function getArea();
}
class Circle extends Shape{
    private $m_fRadius;
    public function __construct($id, $radius)
    {
        parent::__construct($id);
        $this->m_fRadius = $radius;
    }
    public function getArea()
    {
        $area = M_PI * $this->m_fRadius * $this->m_fRadius;
        echo "\n Circle Area with ID: ".self::$id ." is ".$area;
    }
}

class Rectangle extends Shape{
    private $m_fWidth;
    private $m_fHeight;

    public function __construct($id, $width, $height)
    {
        parent::__construct($id);
        $this->m_fWidth = $width;
        $this->m_fHeight = $height;
    }
    public function getArea()
    {
        $area = $this->m_fWidth * $this->m_fHeight;
        echo "\n Rectangle Area with ID: ".self::$id ." is ".$area;
    }
}
$circle = new Circle(10, 25);
$circle->getArea();

$rectangle = new Rectangle(20, 20, 40);
$rectangle->getArea();