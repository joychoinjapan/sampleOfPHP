<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 20:52
 */
// Find the total cost of a $15.22 meal with 8.25% tax and a 15% tip
function restaurant_check($meal,$tax,$tip){
    $tax_amount=$meal*($tax/100);
    $tip_amount=$meal*($tip/100);
    $total_amount=$meal+$tax_amount+$tip_amount;
    return $total_amount;
}

$total=restaurant_check(15,22,8.25);
print 'I only have $20 in cash, so...';
if($total>20){
    print "I must pay with my credit card";
}else{
    print "I can pay with cash.";
}