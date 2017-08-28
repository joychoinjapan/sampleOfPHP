<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/19
 * Time: 22:34
 */
$sweets = array('puff' => 'Sesame Seed Puff',
    'square' => 'Coconut Milk Gelatin Square',
    'cake' => 'Brown Sugar Cake',
    'ricemeat' => 'Sweet Rice and Meat');
function generate_options_with_value($options){
    $html='';
    foreach ($options as $value=>$option){
        $html.="<option value=\"$value\">$option</option>";
    }
    return $html;
}

//display the form
function show_form(){
    $sweets=generate_options_with_value($GLOBALS['sweets']);
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Order:<select name="order">
$sweets
</select>
<br/>
<input type="submit" value="Order">
</form>
_HTML_;

}

function process_form(){
    $Selected_option=$_POST['order'];
    print "the menu you select is :".$GLOBALS['sweets'][$Selected_option];

}

function validate_form(){
    //在这种情况下post过来的是value的值，也就是sweet的键
    $input['order']=$_POST['order'];
    $errors=array();
    if(!array_key_exists($input['order'],$GLOBALS['sweets'])){
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

