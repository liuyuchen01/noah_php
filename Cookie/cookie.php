<?php
setcookie("user", "runoob", time()+3600);
?>
<?php
// 输出 cookie 值
echo $_COOKIE["user"];

// 查看所有 cookie
print_r($_COOKIE);
?>
