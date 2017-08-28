<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 15:16
 */
function page_header2($color){
    print '<html><head><title>Welcome to my site</title></head>';
    $atr="#".$color;
    print "<body bgcolor=\"$atr\">";

}

page_header2('cc00cc');