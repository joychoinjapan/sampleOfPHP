<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 23:16
 */

function validate_form(){
    $errors=array();
    $input=array();

    $input['age']=filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
    if(is_null($input['age'])||($input['age'])===false){
        $errors[]='Please enter a valid age.';
    }
    $input['price']=filter_input(INPUT_POST,'price',FILTER_VALIDATE_FLOAT);
    if(is_null($input['price'])||($input['price'])===false){
        $errors[]='Please enter a valid price.';
    }

    $input['name']=trim($_POST['name']??'');
    if(strlen($input['name'])==0){
        $errors[]='Your name is required.';
    }

    return array($errors,$input);


}