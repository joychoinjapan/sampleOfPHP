<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 7:04
 */


function change_color(string $color)
{
    $arr = explode(",", $color);
    $arr[0] += 0;
    $arr[1] += 0;
    $arr[2] += 0;
    $res = "#";
    foreach ($arr as $color) {
        $color_hexadecimal = dechex($color);
        if ($color < 16) {
            $res .= ("0" . $color_hexadecimal);
        } else {
            $res .= $color_hexadecimal;
        }
    }
    return "$res";
}

print change_color("255,0,255");