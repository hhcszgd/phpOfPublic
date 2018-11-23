<?php
$servername = "localhost";
$username = "root";
$password = "Swift_2018";
//echo phpinfo();
//exit;
// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$str = "连接成功" ;
echo $str;
?>