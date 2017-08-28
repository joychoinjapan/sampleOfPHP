
<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/25
 * Time: 17:24
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    $q=$db->query('SELECT dish_name, price FROM dishes');
    while($row=$q->fetch(PDO::FETCH_NUM)){
        //将数组结果用 逗号链接在一起
        print implode(', ',$row)."<br>";
    }

    // With an object, property access syntax gets you the values
    $q=$db->query('SELECT dish_name, price FROM dishes');
    while ($row=$q->fetch(PDO::FETCH_OBJ)){
        print"{$row->dish_name}has price {$row->price}";
        print"<br>";
    }
}catch (PDOException $e){
    print $e->getMessage();
}