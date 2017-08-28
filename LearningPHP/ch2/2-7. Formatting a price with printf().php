<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/12
 * Time: 8:38
 */
//保留两位小数
$price=5;$tax=0.075;
printf('The dish costs $%.2f',$price*(1+$tax));

$zip = '6520';
$month = 2;
$day = 6;
$year = 2007;
printf("ZIP is %05d and the date is %02d/%02d/%d",$zip,$month,$day,$year);

$min = -40;
$max = 40;
printf("The computer can operate between %+d and %+d degrees Celsius.", $min, $max);

print strtolower('Beef, CHICKEN, Pork, duCK');
print strtoupper('Beef, CHICKEN, Pork, duCK');

//ucwords
print ucwords(strtolower('JOHN FRANKENHEIMER'));

//substr
$str="4000-1234-5678-9101";
print 'Card:xx';
print substr($str,-4,3);

print "<hr/>";
//str_replace()
$my_class="lunch";
$html =
    '<span class="{class}">Fried Bean Curd<span><span class="{class}">Oil-Soaked Fish</span>';
print str_replace('{class}',$my_class,$html);
