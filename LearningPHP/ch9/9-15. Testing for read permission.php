<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 13:49
 */
$template_file='page-template.html';
if(is_readable($template_file)){
    $template=file_get_contents($template_file);
}else{
    print "Can't read template file.";
}