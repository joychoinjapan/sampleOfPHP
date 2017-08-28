<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 20:50
 */
function restaurant_check($meal,$tax,$tip){
    $tax_amount=$meal*($tax/100);
    $tip_amount=$meal*($tip/100);
    $total_amount=$meal+$tax_amount+$tip_amount;
    return $total_amount;
}