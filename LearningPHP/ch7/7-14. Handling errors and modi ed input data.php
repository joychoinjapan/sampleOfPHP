<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/19
 * Time: 3:26
 */
//logic to do the right thing based on the request method
if($_SERVER['REQUEST_METHOD']=='POST'){
    //If validate_form() returns errors,pass them to show_form()
    list($form_errors,$input)=validate_form();
    if($form_errors){
        show_form($form_errors);
    }else{
        process_form($input);
    }
}else{
    show_form();
}