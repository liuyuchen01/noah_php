<?php
//以下实例使用了 filter_var() 函数来移除字符串中 ASCII 值大于 127 的字符，同样它也能移除 HTML 标签：
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>