<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 8:29
 */
if('POST'==$_SERVER['REQUEST_METHOD']){
    print "Hello,".$_POST['my_name'];
}else {
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
    Your name:<input type="text" name="my_name"/>
    <br>
    <input type="submit" value="Say Hello"/>
    </form>
_HTML_;

}
