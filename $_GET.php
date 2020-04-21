<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>
<!--预定义的 $_GET 变量用于收集来自 method="get" 的表单中的值。-->
<!--从带有 GET 方法的表单发送的信息，对任何人都是可见的（会显示在浏览器的地址栏），并且对发送信息的量也有限制。-->
<form action="welcome.php" method="get">
    名字: <input type="text" name="fname">
    年龄: <input type="text" name="age">
    <input type="submit" value="提交">
</form>

</body>
</html>