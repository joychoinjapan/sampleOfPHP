<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/11
 * Time: 20:02
 */

//if else 语句
$a=7;
if($a==5):
    echo "a equals 5";
    echo "...";
elseif ($a==6):
    echo "a equals 6";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;

//while语句
$i=1;
while($i<=10){
    echo $i++;
}

$i=1;
while ($i<=10):
    print $i;
    $i++;
endwhile;
echo "<br>";
//do while 语句
$i=0;
do{
    echo $i;
}while($i>0);

//for
$people = Array(
    Array('name' => 'Kalle', 'salt' => 856412),
    Array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0, $size = sizeof($people); $i < $size; ++$i)
{
    $people[$i]['salt'] = rand(000000, 999999);
}

//foreach
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // 最后取消掉引用