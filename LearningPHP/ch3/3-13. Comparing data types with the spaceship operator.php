<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/14
 * Time: 3:52
 */
// $a is a negative number since 1 is less than 12.7
$a=1<=>12.7;
print $a;

print "<br/>";
// $b is a positive number since "c" comes after "b"
$b = "charlie" <=> "bob";
print $b;

// Comparing numeric strings works like < and >, not like strcmp()
$x = '6 pack' <=> '55 card stud';
if($x>0){
    print 'The string "6 pack" is greater than the string "55 card stud".'; }
    elseif($x<0){
    print 'The string "6 pack" is less than the string "55 card stud".'; }

print "<br/>";
// Comparing numeric strings works like < and >, not like strcmp()
$x ='6 pack' <=> 55;
if($x>0){
    print 'The string "6 pack" is greater than the number 55.'; }
    elseif($x<0){
    print 'The string "6 pack" is less than the number 55.'; }