<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 22:39
 */
function payment_method($cash_on_hand,$amount){
    if($amount>$cash_on_hand){
        return 'credit card';
    }else{
        return 'cash';
    }
}

function restaurant_check($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip =$meal+$tax_amount+$tip_amount;
    return $total_tip;
}

function can_pay_cash($cash_on_hand,$amount){
    if($amount>$cash_on_hand){
        return false;
    }else{
        return true;
    }
}

$total_tip=restaurant_check(15,22,8.25,15);
if(can_pay_cash(20,$total)){
    print "I can pay in cash.";
}else{
    print "Time for the credit card.";
}