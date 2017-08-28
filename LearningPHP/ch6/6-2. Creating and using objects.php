<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 17:23
 */
class Entree { public $name;
    public $ingredients = array();
    public function hasIngredient($ingredient) {
                                    //this:obj ingredients:property
        return in_array($ingredient, $this->ingredients);
    }
}

// Create an instance and assign it to $soup
$soup =new Entree();
//Set $soup's properties
$soup->name='Chicken Soup';
$soup->ingredients=array('chicken','water');

// Create a separate instance and assign it to $sandwich
$sandwich=new Entree();
// Set $sandwich's properties
$sandwich->name='Chicken Sandwich';
$sandwich->ingredients=array('chicken','bread');

foreach(['chicken','lemon','bread','water'] as $ing){
    if($soup->hasIngredient($ing)){
        print "Soup contains $ing";
        print "<br>";
    }
    if($sandwich->hasIngredient($ing)){
        print "Sandwich contains $ing";
        print "<br>";
    }
}

