<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 15:37
 */
function page_header2($color = 'cc3399'){
    print '<html><head><title>Welcome to my site</title></head>';
    $atr="#".$color;
    print "<body bgcolor=\"$atr\">";

}
//while page_header2() without an argument produces a warning, you can run page_header2() without an argument, with $color set to cc3399.
page_header2('FF9473');