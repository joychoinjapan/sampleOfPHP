<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/29
 * Time: 8:28
 */
// The cookie expires one hour from now
setcookie('short-userid','ralph',time()+60*60);

// The cookie expires one day from now
setcookie('longer-serid','ralph',time()+60*60*24);

// The cookie expires at noon on October 1, 2019
$d=new DateTime("2019-10-01 12:00:00");
setcookie('much-longer-serid','ralph',$d->format('U'));