<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 19:06
 */
$meals = array('Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
    'Shrimp Puffs' => 0);

//array_search return the key;
$dish=array_search(6.50,$meals);

if($dish){
    print "$dish costs \$6.50";
}