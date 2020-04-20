<?php
$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
else if ($t<"20") //此处有空格
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
?>