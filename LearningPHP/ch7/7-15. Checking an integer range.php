<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/19
 * Time: 3:52
 */
$input['age']=filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT,
    array('options'=>array('min_range'=>18,'max_range'=>65)));
if(is_null($input['age'])||($input['age']===false)){
    $errors[]='Please enter a valid age between 18 and 65';
}

$input['price']=filter_input(INPUT_POST,'price',FILTER_VALIDATE_FLOAT);
if(is_null($input['price'])||($input['price'])===false||($input['price']<10.00)||($input['price']>50.00)){
   $errors[]='Please enter a valid price between $10 and $50';
}