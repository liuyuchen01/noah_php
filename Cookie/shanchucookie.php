<?php
//当删除 cookie 时，您应当使过期日期变更为过去的时间点。
// 设置 cookie 过期时间为过去 1 小时
setcookie("user", "", time() - 3600);
