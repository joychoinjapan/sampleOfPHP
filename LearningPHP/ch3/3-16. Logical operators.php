<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/14
 * Time: 4:18
 */
$age=20;
if(($age>=13)&&($age<65)){
    print "You are too old for a kid's discount and too young for the senior's
discount.";
}
print "<br/>";
$meal = 'breakfast';
$dessert = 'souffle';

if (($meal == 'breakfast') || ($dessert == 'souffle'))
{ print "Time to eat some eggs.";
}
