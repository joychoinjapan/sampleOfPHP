<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 13:58
 */

$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);

}catch (Exception $e){
    print "Couldn't connect to database:".$e->getMessage();
    exit();
}

// Open dishes.txt for writing
$fh=fopen('dishes.txt','wb');
if(!$fh){
    print  "Error opening dishes.txt: $php_errormsg";
}else{
    $q=$db->query("SELECT dish_name, price FROM dishes");
    while($row = $q->fetch()) {
// Write each line (with a newline on the end) to // dishes.txt
        fwrite($fh, "The price of $row[0] is $row[1] \n");
    }
    if(!fclose($fh)){
        print "Error closing dishes.txt: $php_errormsg";
    }
}
