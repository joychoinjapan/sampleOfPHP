<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/07
 * Time: 18:51
 */
//key可以是integer或者String value是任意类型
$array=[
    "foo" => "bar",
    "bar" => "foo",
];

$array2=[
    1=>"a",
    "1"=>"b",
    1.5=>"c",
    true=>"d",
];
var_dump($array2);

echo "<hr/>";
$array3 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array3);
echo "<br>";
$array4=["foo","bar","hallo","world"];
var_dump($array4);
echo "<br>";
$array4 = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array4);
echo "<br>";
$array5=[
    "foo"=>"bar",
     42  =>24,
     "multi"=>[
         "dimensional"=>["array"=>"foo"]
     ]
];

var_dump($array5["foo"]);
var_dump($array5[42]);
var_dump($array5["multi"]["dimensional"]["array"]);
