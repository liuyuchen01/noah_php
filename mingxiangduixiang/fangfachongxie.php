<?php
//如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。
function getUrl() {
    echo $this->url . PHP_EOL;
    return $this->url;
}

function getTitle(){
    echo $this->title . PHP_EOL;
    return $this->title;
}