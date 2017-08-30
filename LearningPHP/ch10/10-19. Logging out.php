<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/30
 * Time: 8:10
 */
session_start();
unset($_SESSION['username']);

print 'Bye-bye.';