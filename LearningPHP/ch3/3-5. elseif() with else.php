<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/13
 * Time: 18:01
 */

$logged_in=true;
$new_messages=true;
$emergency=false;
if ($logged_in) {
// This runs if $logged_in is true
print "Welcome aboard, trusted user.";
} elseif ($new_messages) {
// This runs if $logged_in is false but $new_messages is true
print "Dear stranger, there are new messages.";
} elseif ($emergency) {
// This runs if $logged_in and $new_messages are false
// but $emergency is true
    print "Stranger, there are no new messages, but there is an emergency.";
}else{
// This runs if $logged_in, $new_messages, and
// $emergency are all false
    print "I don't know you, you have no messages, and there's no emergency.";
}
