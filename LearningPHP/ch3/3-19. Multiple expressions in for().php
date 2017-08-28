<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/14
 * Time: 4:35
 */
print '<select name="doughnuts">';
for($min=1,$max=10;$min<50;$min+=10,$max+=10){
    print "<option>$min-$max</option>¥n";
}
print '</select>';