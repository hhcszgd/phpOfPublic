<?php
//require "syntax.php";
//ali server
//$servername = "localhost";
//$username = "root";
//$password = "Swift_2018";


//local
$servername = "localhost";
$username = "root";
$password = "Swift_2018";



//echo phpinfo();
//exit;
// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    echo ("连接失败: " . $conn->connect_error . "<br>");
}else{
    echo ("连接成功");
}
echo  $_SERVER["REMOTE_ADDR"];
//$str = array("hello" => "world") ;
//echo json_encode($str);

//testPara("name" , 2);
//syntax::testPara("John" , 15 , 1);
?>