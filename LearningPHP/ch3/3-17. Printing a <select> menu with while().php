<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/14
 * Time: 4:28
 */
$i=1;
print '<select name="people">';
while ($i<=10){
    print "<option>$i</option>¥n";
    $i++;
}
print '</select>';
