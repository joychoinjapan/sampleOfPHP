<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 6:52
 */
$flavors = array('Japanese' => array('hot' => 'wasabi', 'salty' => 'soy sauce'),
    'Chinese' => array('hot' => 'mustard', 'pepper-salty' => 'prickly ash'));

foreach ($flavors as $culture => $culture_flavors){
    foreach ($culture_flavors as $flavor =>$example){
        print "A $culture $flavor flavor is $example.";
        print "<br/>";
    }
}