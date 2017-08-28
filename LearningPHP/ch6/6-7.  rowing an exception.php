<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 0:38
 */
class Entree01{
    public $name;
    public $ingredients=array();

    public function __construct($name,$ingredients){
        if(! is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name=$name;
        $this->ingredients=$ingredients;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);

}
}

$drink=new Entree01('Class of Milk','milk');
if($drink->hasIngredient('milk')){
    print "Yummy!";
}