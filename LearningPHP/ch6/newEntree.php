<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 0:55
 */

class newEntree
{
    private $name;
    protected $ingredients = array();

    public function __construct($name, $ingredients)
    {
        if (!is_array($ingredients)) {
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
    public function getName(){
        return $this->name;
    }
}