<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/29
 * Time: 12:55
 */
require 'FormHelperNew.php';
session_start();
$main_dishes=array(
    'cuke' => 'Braised Sea Cucumber',
    'stomach' => "Sauteed Pig's Stomach",
    'tripe' => 'Sauteed Tripe with Wine Sauce',
    'taro' => 'Stewed Pork with Taro',
    'giblets' => 'Baked Giblets with Salt',
    'abalone' => 'Abalone with Marrow and Duck Feet'
);

if (isset($_SESSION['order']) && (count($_SESSION['order']) > 0)) {
    print '<ul>';
    foreach ($_SESSION['order'] as $order) {
        $dish_name = $main_dishes[ $order['dish'] ];
        print "<li> $order[quantity] of $dish_name </li>";
    }
    print "</ul>";
} else{
    print "You haven't ordered anything.";
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    list($errors,$input)=validate_form();
    if($errors){
        show_form($errors);
    }else{
        process_form($input);
    }
}else{
    show_form();
}

function show_form($errors=array()){
    // No defaults of our own, so nothing to pass to the FormHelper constructor
    $form=new FormHelperNew();

    // Build up the error HTML to use later
    if($errors){
        $errorHTML='<ul><li>';
        $errorHTML.=implode('</li><li>',$errors);
        $errorHTML.='</li></ul>';
    }else{
        $errorHTML='';
    }


// This form is small, so we'll just print out its components here
print <<<_FORM_
<form method="post" action="{$form->encode($_SERVER['PHP_SELF'])}">
$errorHTML
Dish:{$form->select($GLOBALS['main_dishes'],['name'=>'dish'])}<br>
Quantity:{$form->input('text',['name'=>'quantity'])}<br/>
{$form->input('submit',['value'=>'Order'])}
</form>
_FORM_;
}

function validate_form(){
    $input=array();
    $errors=array();
    // The dish selected in the menu must be valid
    $input['dish']=$_POST['dish']??'';
    if(!array_key_exists($input['dish'],$GLOBALS['main_dishes'])){
        $errors[]='Please select a valid dish.';
    }
    $input['quantity']=filter_input(INPUT_POST,'quantity',FILTER_VALIDATE_INT
    ,array('options'=>array('min_range'=>1)));
    if(($input['quantity']===false)||($input['quantity']===null)){
        $errors[]='Please enter a quantity';
    }
    return array($errors,$input);

}

function process_form($input) {
    $_SESSION['order'][] = array('dish' => $input['dish'],
        'quantity' => $input['quantity']);
    print 'Thank you for your order.';
}


