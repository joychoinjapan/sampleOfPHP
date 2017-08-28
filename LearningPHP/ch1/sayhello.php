<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/11
 * Time: 23:09
 */
if($_POST['user']){
    print "Hello,";
    print $_POST['user'];
    print "!";
}else{
    print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}