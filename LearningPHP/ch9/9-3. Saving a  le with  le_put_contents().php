<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/27
 * Time: 15:29
 */
$page=file_get_contents('page-template.html');

//Insert the title of the page
$page=str_replace('{page_title}','Welcome',$page);

//Make the page blue in the afternoon and green in the morning
if(date('H')>=12){
    $page=str_replace('{color}','green',$page);
}else{
    $page=str_replace('{color}','blue',$page);
}

// Take the username from a previously saved session variable
$page=str_replace('{name}',$_SESSION['username'],$page);

// Write the results to page.html
file_put_contents('page.html',$page);