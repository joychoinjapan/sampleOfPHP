<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 4:34
 */
require 'restaurant-functions.php';
/* $25 check, plus 8.875% tax, plus 20% tip */
$total_bill = restaurant_check(25, 8.875, 20);
$cash=30;
print "I need to pay with ".payment_method($cash,$total_bill);