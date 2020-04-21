<?php
//设置 cookie 的过期时间。这也许比使用秒表示的方式简单
$expire=time()+60*60*24*30;
setcookie("user", "runoob", $expire);
?>