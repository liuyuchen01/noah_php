<?php
//PHP 使用关键字 extends 来继承一个类，PHP 不支持多继承
//实例中 Child_Site 类继承了 Site 类，并扩展了功能

// 子类扩展站点类别
class Child_Site extends Site
{
    var $category;

    function setCate($par)
    {
        $this->category = $par;
    }

    function getCate()
    {
        echo $this->category . PHP_EOL;
    }
}