<?php
$con=mysqli_connect("localhost","username","password","database");

if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM TestData WHERE bookname='ABC'");

mysqli_close($con);
?>