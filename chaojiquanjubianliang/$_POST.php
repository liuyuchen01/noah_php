<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
//PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。
$name = $_POST['fname'];
echo $name;
?>

</body>
</html>