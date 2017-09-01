<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/09/01
 * Time: 18:13
 */

//产品接口
interface Animal{
    public function run();
    public function say();
}

//接口的具体实现产品类
class Cat implements Animal{
    public function run()
    {
        // TODO: Implement run() method.
        echo "I ran slowly <br>";
    }
    public function say()
    {
        // TODO: Implement say() method.
        echo "I am Cat class <br>";
    }
}

class Dog implements Animal{
    public function run()
    {
        // TODO: Implement run() method.
        echo "I ran slowly <br>";
    }
    public function say()
    {
        // TODO: Implement say() method.
        echo "I am Dog class <br>";
    }
}


//工厂的抽象类
abstract class Factory{
    abstract static function createAnimal();
}

//工厂抽象类的具体实现，用于创建具体产品的各个工厂类。
class CatFactory extends Factory{

    public static function createAnimal()
    {
        // TODO: Implement createAnimal() method.
        return new Cat();
    }
}

class DogFactory extends Factory{

    static function createAnimal()
    {
        // TODO: Implement createAnimal() method.
        return new Dog();
    }
}

$cat=CatFactory::createAnimal();
$cat->say();
$cat->run();

$dog=DogFactory::createAnimal();
$dog->say();
$cat->run();