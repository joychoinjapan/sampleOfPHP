<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/27
 * Time: 15:32
 */
foreach (file('people.txt')as $line){
    $line=trim($line);
    $info=explode('|',$line);
    print'<li href="mailto:'.$info[0].'">'.$info[1]."</li>";
}