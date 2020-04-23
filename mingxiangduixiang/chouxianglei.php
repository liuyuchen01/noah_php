<?php
//任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。
//
//定义为抽象的类不能被实例化。
//
//被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。
//
//继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私
//抽象方法必须在抽象类里
//抽象类里不一定有抽象方法
//抽象类本身不能被实例化
//子类继承抽象类时必须实现父类里的抽象方法，如果不想全部实现，把自己也变成一个抽象类
//万物皆对象
//类是具有相同属性和方法的多个对象的集合
//由类变成对象的过程叫做实例化
//类本身不能直接使用，如果要用需要生成对象
//属性是用来表示描述性信息的
//类的继承没有级数限制
abstract class AbstractClass
{
    // 强制要求子类定义这些方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // 普通方法（非抽象方法）
    public function printOut() {
        print $this->getValue() . PHP_EOL;
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;