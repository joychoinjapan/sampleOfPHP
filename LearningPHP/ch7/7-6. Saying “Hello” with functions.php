<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 15:34
 */

if($_SERVER['REQUEST_METHOD']=='POST'){
    process_form();
}else{
    show_form();
}

//Do something when the form is submitted
function process_form(){
    print "Hello," .$_POST['my_name'];
}

//Display the form
function show_form(){
    print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;

}

//Check the form data
function validate_form(){
    //Is my_name at least 3 characters long?
    if(strlen($_POST['my_name'])<3){
        return false;
    }else{
        return true;
    }
}