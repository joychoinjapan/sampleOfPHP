<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/09/01
 * Time: 20:59
 */

//抽象产品
interface TV{
    public function open();
    public function watch();
}
//具体产品
class HaierTv implements TV{

    public function open()
    {
        // TODO: Implement open() method.
        echo "Open Haier TV <br>";
    }

    public function watch()
    {
        // TODO: Implement watch() method.
        echo "I'm watching TV <br>";
    }
}

//抽象产品
interface PC{
    public function work();
    public function play();
}

//具体产品
class LenovoPc implements PC{

    public function work()
    {
        // TODO: Implement work() method.
        echo "I'm working on a Lenovo computer <br>";
    }

    public function play()
    {
        // TODO: Implement play() method.
        echo "Lenovo computers can be used to play games <br>";
    }
}

//抽象工厂
abstract class Factory{
    abstract public static function createPc();
    abstract public static function createTv();
}

//具体工厂
class ProductFactory extends Factory{

    public static function createPc()
    {
        // TODO: Implement createPc() method.
        return new LenovoPc();
    }

    public static function createTv()
    {
        // TODO: Implement createTv() method.
        return new HaierTv();
    }
}

$newTv=ProductFactory::createTv();
$newTv->open();
$newTv->watch();

$newPc=ProductFactory::createPc();
$newPc->work();
$newPc->play();