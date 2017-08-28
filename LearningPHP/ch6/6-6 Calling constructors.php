<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 23:47
 */
class Entree {
    public $name;
    public $ingredients = array();
    public function __construct($name, $ingredients) {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}

// Some soup with name and ingredients
$soup=new newEntree('Chicken Soup',array('chicken','water'));

// A sandwich with name and ingredients
$sandwich=new newEntree('Chicken Sandwich',array('chicken','bread'));