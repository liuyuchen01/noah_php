<?php
//以下实例使用了 filter_var() 函数来检测 $url 是否包含查询字符串：
$url = "http://www.runoob.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url 是一个合法的 URL");
} else {
    echo("$url 不是一个合法的 URL");
}
?>