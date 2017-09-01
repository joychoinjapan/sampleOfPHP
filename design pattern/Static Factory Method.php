<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/09/01
 * Time: 17:41
 */
class cat{
    function __construct()
    {
        echo "I am Cat class <br>";
    }
}
class Dog{
    function __construct()
    {
        echo "I am Dog class <br>";
    }
}

class Factory{
    public static function CreateAnimal($name){
        if($name=='cat'){
            return new Cat();
        }elseif ($name=='dog'){
            return new Dog();
        }
    }
}

$cat=Factory::CreateAnimal('cat');
$dog=Factory::CreateAnimal('dog');
