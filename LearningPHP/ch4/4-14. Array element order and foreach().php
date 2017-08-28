<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 18:32
 */
$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';

foreach ($letters as $letter) {
    print $letter;
}
print "<br/>";
for($i=0,$num_letters=count($letters);$i<$num_letters;$i++){
    print $letters[$i];

}
