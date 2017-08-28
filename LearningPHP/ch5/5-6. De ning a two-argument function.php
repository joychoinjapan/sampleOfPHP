<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 15:47
 */
function page_header4($color,$title){
    print '<html><head><title>Welcome to '. $title . '</title></head>';
    print '<body bgcolor="#'. $color .'">';
}
page_header4('66cc66','my homepage');