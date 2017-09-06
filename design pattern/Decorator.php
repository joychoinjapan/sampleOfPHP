<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/9/6
 * Time: 19:28
 */
abstract class Component{
    abstract public function operation();
}
class MyComponent extends Component{

    public function operation()
    {
        // TODO: Implement operation() method.
        echo "这是正常的组件方法 <br>";
    }
}

abstract class Decorator extends Component{
    protected $component;
    function __construct(Component $component)
    {
        $this->component=$component;
    }

    public function operation()
    {
        // TODO: Implement operation() method.
        $this->component->operation();
    }
}

class MyDecorator extends Decorator{
    function __construct(Component $component)
    {
        parent::__construct($component);
    }

   public function addMethod(){
       echo "这是装饰器添加的方法 <br>";
   }

   public function operation()
   {
       $this->addMethod();
       parent::operation(); // TODO: Change the autogenerated stub
   }
}

$component=new MyComponent();
$da=new MyDecorator($component);
$da->operation();