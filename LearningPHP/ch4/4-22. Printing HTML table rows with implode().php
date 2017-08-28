<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 23:25
 */
$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
print '<table>';
print '<tr><td>' . implode('</td><td>',$dimsum) . '</td></tr>';
print '</table>';