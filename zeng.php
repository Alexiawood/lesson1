<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "TestData";
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO TestData (bookname, publishdate, email)
VALUES ('ABC', '2018-11-8', 'ABC@163.com')";
 
if (mysqli_query($conn, $sql)) {
    echo "插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>