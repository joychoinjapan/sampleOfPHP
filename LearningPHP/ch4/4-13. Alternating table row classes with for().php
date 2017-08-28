<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 18:20
 */
$row_styles = array('even','odd');
$dinner = array('Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'); print "<table>\n";
for($i=0,$num_dishes=count($dinner);$i<$num_dishes;$i++){
    print '<tr class="'.$row_styles[$i % 2].'">';
    print "<td>Element $i</td><td>$dinner[$i]</td></tr>";
}