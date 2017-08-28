<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/20
 * Time: 6:07
 */
//Remove HTML from comments
$comments=strip_tags($_POST['comments']);
//Now it's OK to print $comments
print $comments;