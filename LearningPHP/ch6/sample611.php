<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 1:20
 */
require ("newEntree.php");
require ("ComboMeal.php");
// Some soup with name and ingredients
$soup = new newEntree('Chicken Soup', array('chicken', 'water')); // A sandwich with name and ingredients
$sandwich = new newEntree('Chicken Sandwich', array('chicken', 'bread')); // A combo meal
$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));
foreach (['chicken','water','pickles'] as $ing) {
    if ($combo->hasIngredient($ing)) {
    print "Something in the combo contains $ing.\n"; }
}



