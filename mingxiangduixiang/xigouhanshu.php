<?php
//析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。
class MyDestructableClass {
    function __construct() {
        print "构造函数\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct() {
        print "销毁 " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();
?>