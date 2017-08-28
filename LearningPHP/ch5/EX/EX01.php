<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 6:31
 */

$url="/images/";
function get_img_tag($filename,$alt="website",$height="100px",$width="100px"){
    global $url;
    $url .=$filename;
    return "<img url=".$url." alt=". $alt." height=".$height." width=". $width.">";

}

print get_img_tag("example");

