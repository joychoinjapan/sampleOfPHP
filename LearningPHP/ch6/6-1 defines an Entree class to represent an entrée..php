<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 16:45
 */
class Entree{
    public $name;
    public $ingredients=array();

    //method
    public function hasIngredient($ingredient){
        //check if $ingredient is in array $ingredients;
        return in_array($ingredient,$this->ingredients);
    }
}