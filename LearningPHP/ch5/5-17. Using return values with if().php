<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 22:35
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
    return $total_tip;
}

if(restaurant_check2(15.22,8.25,15)<20){
    print 'less than $20,I can pay cash.';
}else{
    print 'Too expensive,I need my credit card';
}