<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/19
 * Time: 14:32
 */
$input['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); if (! $input['email']) {
    $errors[] = 'Please enter a valid email address';
}
