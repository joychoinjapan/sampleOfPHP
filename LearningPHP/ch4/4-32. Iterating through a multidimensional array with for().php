<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 6:55
 */

$specials = array(
    array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
    array('Chestnut Salad','Walnut Salad', 'Peanut Salad')
);

for($i=0,$num_specials=count($specials);$i<$num_specials;$i++){
    for($m=0,$num_sub=count($specials[$i]);$m<$num_sub;$m++){
        print "Element [$i][$m] is ".$specials[$i][$m];
        print "<br/>";

    }
}