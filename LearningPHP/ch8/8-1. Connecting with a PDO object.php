<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/22
 * Time: 20:51
 */

//host ,databasename,username,password
//'mysql:host=db.example.com is a datasourcename(DSN)
$db=new PDO('mysql:host=db.example.com;
dbname=restaurant','penguin','top^hat');