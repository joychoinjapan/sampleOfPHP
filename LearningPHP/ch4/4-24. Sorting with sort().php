<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 23:33
 */
$dinner = array('Sweet Corn and Asparagus', 'Lemon Chicken',
    'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:\n";
print "<br/>";
foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value\n";
    print "<br/>";};

foreach ($meal as $key => $value) {
    print" \$meal:$key$value\n";
    print "<br/>";
}

sort($dinner);
sort($meal);

print "After Sorting:\n";
foreach ($dinner as $key => $value){
    print "\$dinner:$key $value\n";
    print "<br/>";
}
foreach ($meal as $key =>$value){
    print " \$meal:$key $value\n";
    print "<br/>";
}

