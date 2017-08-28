<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 12:10
 */
$meal=array('breakfast'=>'Walnut Bun','lunch'=> 'Cashew Nuts and White Mushrooms','snack'=>'Dried Mulberries','dinner' => 'Eggplant with Chili Sauce');
print "<table>\n";
foreach($meal as $key =>$value){
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';
