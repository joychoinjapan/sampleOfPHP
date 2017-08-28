<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 4:24
 */
function restaurant_check($meal,$tax,$tip):float{
    $tax_amount=$meal*($tax/100);
    $tip_amount=$meal*($tip/100);
    $total_amount=$meal+$tax_amount+$tip_amount;

    return $total_amount;
}

$res=restaurant_check(13,8,15);
print $res;