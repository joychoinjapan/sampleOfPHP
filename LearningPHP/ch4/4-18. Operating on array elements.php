<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 19:10
 */
$dished['Beef Chow Foon']=12;
$dished['Beef Chow Foon']++;
$dished['Roast Duck']=3;
$dished['total']=$dished['Beef Chow Foon']+$dished['Roast Duck'];
if($dished['total']>15){
    print "You ate a lot: ";
}
print 'You ate '.$dishes['Beef Chow Foon'].' dishes of Beef Chow Foon.';