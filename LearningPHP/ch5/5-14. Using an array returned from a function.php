<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 22:29
 */
function restaurant_check2($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip =$meal+$tax_amount+$tip_amount;
    return array($total_notip, $total_tip);
}
$totals = restaurant_check2(15.22, 8.25, 15);
if($totals[0]<20){
    print 'he total without tip is less than $20.';
}

if($totals[1]<20){
    print 'The total with tip is less than $20.';
}
