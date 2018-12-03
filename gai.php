<?php
$con=mysqli_connect("localhost","username","password","database");

if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE TestData SET bookname='ABD'
WHERE bookname='ABC' AND publishdate='2018-11-8'");

mysqli_close($con);
?>