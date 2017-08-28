<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 1:11
 */

class ComboMeal extends newEntree{
     public function __construct($name,$entrees){
         parent::__construct($name,$entrees);
         foreach ($entrees as $entree){
             if(! $entree instanceof newEntree){
                 throw new Exception('Elements of $entrees must be newEntree objects');
             }
         }
     }

    public function hasIngredient($ingredient){
         foreach ($this->ingredients as $entree) {
             if($entree->hasIngredient($ingredient)){
                 return true;
             }
         }
         return false;
     }
}