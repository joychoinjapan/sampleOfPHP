<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 21:25
 */
class Entree{
    public $name;
    public $ingredients=array();

    //construct
    public function __construct($name,$ingredients){
        $this->name=$name;
        $this->ingredients=$ingredients;
}
    //method
    public function hasIngredient($ingredient){
        return in_array($ingredient,$this->ingredients);
    }
}