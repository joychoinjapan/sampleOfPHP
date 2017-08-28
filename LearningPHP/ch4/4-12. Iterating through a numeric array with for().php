<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 18:17
 */
$dinner = array('Sweet Corn and Asparagus', 'Lemon Chicken', 'Braised Bamboo Fungus');
for($i=0,$num_dishes=count($dinner);$i<$num_dishes;$i++){
    print "Dish number $i is $dinner[$i]";
    print "<br/>";
}