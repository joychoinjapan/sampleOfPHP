<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/20
 * Time: 8:31
 */
$sweets=array('puff' => 'Sesame Seed Puff',
    'square' => 'Coconut Milk Gelatin Square',
    'cake' => 'Brown Sugar Cake',
    'ricemeat' => 'Sweet Rice and Meat');
print '<select name="sweet">';
// > is the option value, $label is what's displayed
foreach ($sweets as $option => $label){
    print '<option value="'.$option.'"';
    if($option==$defaults['sweet']){
        print ' selected';
    }
    print ">$label</option>";
}
print '</select>';