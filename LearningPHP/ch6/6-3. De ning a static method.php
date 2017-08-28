<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 17:55
 */
class Entree {
    public $name;
    public $ingredients = array();
    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }
    public static function getSizes(){
        return array('small','medium','large');
}
}

$sizes=newEntree::getSizes();