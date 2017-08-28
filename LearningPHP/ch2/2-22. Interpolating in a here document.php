<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/12
 * Time: 19:59
 */

$page_title = 'Menu';
$meat = 'pork';
$vegetable = 'bean sprout';

print <<<MENU
<html>
<head><title>$page_title</title></head>
<body>
<ul>
<li> Barbecued $meat
<li> Sliced $meat
<li> Braised $meat with $vegetable
</ul>
</body>
</html>
MENU;
