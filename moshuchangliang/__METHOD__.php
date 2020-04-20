<?php
//返回该方法被定义时的名字（区分大小写）
function test() {
    echo  '函数名为：' . __METHOD__ ;
}
test();
?>