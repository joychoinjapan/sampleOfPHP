<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/12
 * Time: 20:56
 */
$hamburgers=4.95;
$milkshake=1.95;
$cola=0.85;
$tax_rate=0.075;
$tip=0.16;

$amount=$hamburgers*2+$milkshake+$cola;
$total_cost=$amount*$tip+$amount+$amount*$tax_rate;
print round($total_cost,1);

//answer
print "<br/>";
$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = (2 * $hamburger) + $shake + $cola;
$tip = $food * $tip_rate;
$tax = $food * $tax_rate;
$total = $food + $tip + $tax;
print 'The total cost of the meal is $' . $total;