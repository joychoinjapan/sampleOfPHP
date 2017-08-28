<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/08
 * Time: 15:09
 */
$a=30;
$b=4;
$c=$a/$b;
echo (int)($c);
echo "<br/>";
//赋值运算符
$a = ($b = 4) + 5;
echo $a;
echo "<br/>";
$a=3;
$a+=5;
$b="Hello";
$b.="There";
echo $a;
echo $b;
echo "<br/>";

//引用赋值
$a=3;
$b=&$a;

print "$a\n";
print "$b\n";

$a=4;
print "$a\n";
print "$b\n";

//如果比较一个数字和字符串或者比较涉及到数字内容的字符串，则字符串会被转换为数值并且比较按照数值来进行。此规则也适用于 switch 语句。当用 === 或 !== 进行比较时则不进行类型转换，因为此时类型和数值都要比对。
var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

switch ("a") {
    case 0:
        echo "0";
        break;
    case "a": // never reached because "a" is already matched with 0
        echo "a";
        break;
}

//反引号
$output = `ls -al`;
echo "<pre>$output</pre>";

//逻辑运算
// 下面的 foo() 不会被调用，因为它们被运算符“短路”了。
$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());

// "||" 的优先级比 "or" 高
$e = false || true; // $e 被赋值为 (false || true)，结果为 true
$f = false or true; // $f 被赋值为 false [Altair注："=" 的优先级比 "or" 高]
var_dump($e, $f);

// "&&" 的优先级比 "and"　高
$g = true && false; // $g 被赋值为 (true && false)，结果为 false
$h = true and false; // $h 被赋值为 true [Altair注："=" 的优先级比 "and" 高]
var_dump($g, $h);

//字符串运算符 链接运算符 . 赋值运算符 .=
$a="Hello";
$b=$a." World";
echo $b;
$c = "Hello ";
$c .= "World!";     // now $a contains "Hello World!"
echo $c;
echo "<br/>";
//数组运算符
$a = ["a" => "apple", "b" => "banana"];
$b = ["a" => "pear", "b" => "strawberry", "c" => "cherry"];

$c=$a+$b;
var_dump($c);
echo "<br/>";
$c=$b+$a;
var_dump($c);