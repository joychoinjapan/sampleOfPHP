<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 2:22
 */

require ('newEntree.php');
$soup =new newEntree('Chicken Soup',array('chicken','water'));
// Create a separate instance and assign it to $sandwich
$sandwich=new newEntree('Chicken Sandwich',array('chicken','bread'));
// Set $sandwich's properties


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