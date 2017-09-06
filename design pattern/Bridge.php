<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/9/6
 * Time: 13:22
 */

//Implementor
interface DrawingAPI{
    public function drawCircle($x,$y,$radius);
}

//drawAPI1
class DrawingAPI1 implements DrawingAPI{

    public function drawCircle($x, $y, $radius)
    {
        // TODO: Implement drawCircle() method.
        echo "API.circle at (".$x.','.$y,')radius'.$radius.'<br>';
    }
}

//drawAIP2
class DrawingAPI2 implements DrawingAPI{

    public function drawCircle($x, $y, $radius)
    {
        // TODO: Implement drawCircle() method.
        echo "API2.circle at (".$x.','.$y,')radius'.$radius.'<br>';
    }
}

//shape接口 Abstractor
interface Shape{
    public function draw();
    public function resize($radius);
}

class CircleShape implements Shape{

    private $x;
    private $y;
    private $radius;
    private $drawingAPI;
    function __construct($x,$y,$radius,DrawingAPI $drawingAPI)
    {
        $this->x=$x;
        $this->y=$y;
        $this->radius=$radius;
        $this->drawingAPI=$drawingAPI;
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        $this->drawingAPI->drawCircle($this->x,$this->y,$this->radius);

    }

    public function resize($radius)
    {
        // TODO: Implement resize() method.
        $this->radius=$radius;
    }
}

$shap1=new CircleShape(1,2,4,new DrawingAPI1());
$shap2=new CircleShape(1,2,4,new DrawingAPI2());
$shap1->draw();
$shap2->draw();
$shape1->resize(10);
$shape1->draw();