<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 15:34
 */

if($_SERVER['REQUEST_METHOD']=='POST'){
    // If validate_form() returns errors, pass them to show_form()
    $form_errors=validate_form();
    $length=count($form_errors);
   if($length>0){
       show_form($form_errors);
   }else if($length==0){
       process_form();
   }
}else{
    show_form(null);
}

//Do something when the form is submitted
function process_form(){
    print "Hello," .$_POST['my_name'];
}

//Display the form
function show_form($errors){
    // If some errors were passed in, print them out
    if($errors){
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>',$errors);
        print '</li></ul>';
    }
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
    //Start with an empty array of error message
    $errors=array();

    //Is my_name at least 3 characters long?
    if(strlen($_POST['my_name'])<3){
        $errors[]='Your name must be at least 3 letters long.';

    }
    return $errors;

}
