<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 22:31
 */
function payment_method($cash_on_hand,$amount){
    if($amount>$cash_on_hand){
        return 'credit card';
    }else{
        return 'cash';
    }
}

function restaurant_check2($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip =$meal+$tax_amount+$tip_amount;
    return array($total_notip, $total_tip);
}

$total=restaurant_check2(15.22, 8.25, 15);
$method=payment_method(20,$total[1]);
print 'I will pay with ' .$method;