<html>
<body>

<?php
//PHP $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。
//$_GET 也可以收集URL中发送的数据。
echo "Study " . $_GET['subject'] . " @ " . $_GET['web'];
?>

</body>
</html>