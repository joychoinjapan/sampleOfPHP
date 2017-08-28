<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/12
 * Time: 19:47
 */
$price=3.95;
$tax_rate=0.08;
$tax_amount=$price*$tax_rate;
$total_cost=$price+$tax_amount;

$username='james';
$doman='@example.com';
$email_address=$username .$doman;

print'The tax is'.$tax_amount;
print "\n";
print 'The total cost is' .$total_cost;
print "\n";
print $email_address;