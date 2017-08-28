<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 4:33
 */

function restaurant_check($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;
    return $total_amount; }


function payment_method($cash_on_hand, $amount) {
    if ($amount > $cash_on_hand) {
    return 'credit card';
}else{
    return 'cash';
}
}
