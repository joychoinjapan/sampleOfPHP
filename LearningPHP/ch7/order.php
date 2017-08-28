<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/19
 * Time: 21:32
 */
$sweets=array('Sesame Seed Puff','Coconut Milk Gelatin Square', 'Brown Sugar Cake','Sweet Rice and Meat');

function generate_options($options){
    $html='';
    foreach ($options as $option){
        $html .="<option>$option</option>";
    }
    return $html;
}

//Display the form
function show_form(){
    $sweets=generate_options($GLOBALS['sweets']);
    print<<<_HTML_
<form method="post" action=$_SERVER[PHP_SELF]>
Your Order: <select name="order">
$sweets
</select>
<br/>
<input type="submit" value="Order">
</form>
_HTML_;

}

function process_form(){
    $Selected_option=$_POST['order'];
    print "the menu you select is :".$Selected_option;

}
function validate_form(){
$input['order']=$_POST['order'];
$errors=array();
if(!in_array($input['order'],$GLOBALS['sweets'])){
    $errors[]='Please choose a valid order';
}
return $errors;
}


if($_SERVER['REQUEST_METHOD']=='POST'){
    // If validate_form() returns errors, pass them to show_form()
    $form_errors=validate_form();
    $length=count($form_errors);
    if($length>0){
            print 'Please correct these errors: <br>';
            print  $form_errors[0];
            print '<br>';
            show_form();
    }else if($length==0){
        process_form();
    }
}else{
    show_form();
}