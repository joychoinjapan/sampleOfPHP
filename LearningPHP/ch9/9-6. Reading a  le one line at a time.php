<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/27
 * Time: 15:57
 */
$fh=fopen('people.txt','rb');
while((!feof($fh))&&($line=fgets($fh))){
    $line=trim($line);
    $info=explode('|',$line);
    print '<li><a href="mailto:' . $info[0] . '">' . $info[1] ."</li>\n";
}
fclose($fh);