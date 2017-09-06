<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/9/6
 * Time: 12:39
 */

//适配者
class Adaptee{
    public function realReauest(){
        echo "这是被适配者真正的调用方法";
    }
}


//目标类
interface Target{
    public function request();
}

class Adapter implements Target{
    protected $adaptee;
    function __construct(Adaptee $adaptee)
    {
        $this->adaptee=$adaptee;
    }

    public function request()
    {
        echo "适配器转换";
        // TODO: Implement request() method.
        $this->adaptee->realReauest();
    }
}

$adaptee=new Adaptee();
$target=new Adapter($adaptee);
$target->request();