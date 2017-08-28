<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 14:12
 */
// Load the file from Example 9-1
$page = file_get_contents('page-template.html');
// Insert the title of the page
$page = str_replace('{page_title}', 'Welcome', $page);
// Make the page blue in the afternoon and // green in the morning]
if (date('H' >= 12)) {
    $page = str_replace('{color}', 'blue', $page);
}else{
    $page = str_replace('{color}', 'green', $page);
}
// Take the username from a previously saved session
// variable
$page = str_replace('{name}', $_SESSION['username'], $page);
$result = file_put_contents('page.html', $page);
// Need to check if file_put_contents() returns false or -1
if(($result===false)||($result==-1)){
    print "Couldn't save HTML to page.html";
}