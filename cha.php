<?php
$con=mysqli_connect("localhost","username","password","database");

if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM TestData
WHERE publishdate='2018-11-8'");

while($row = mysqli_fetch_array($result))
{
    echo $row['bookname'] . " " . $row['publishdate'];
    echo "<br>";
}
?>