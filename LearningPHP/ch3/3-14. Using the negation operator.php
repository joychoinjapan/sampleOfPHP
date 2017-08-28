<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/14
 * Time: 4:11
 */
// The entire test expression ($finished == false) // is true if $finished is false
$finished=false;
if ($finished == false) {
    print 'Not done yet!'; }
print "<br/>";

// The entire test expression (! $finished) // is true if $finished is false
if (! $finished) {
    print 'Not done yet!'; }
