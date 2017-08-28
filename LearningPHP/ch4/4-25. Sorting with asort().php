<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 4:31
 */
$meal = array('breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:\n";
print "<br/>";
foreach ($meal as $key => $value){
    print " \$meal:$key $value\n";
    print "<br/>";
}

asort($meal);

print "<br/>";
print "After Sorting: \n";
print "<br/>";
foreach ($meal as $key => $value){
    print " \$meal:$key $value\n";
    print "<br/>";
}