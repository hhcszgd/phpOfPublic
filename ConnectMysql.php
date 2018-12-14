
<div style="background: #00BE00  ; color: #00775f ">
<?php
//require "syntax.php";
//ali server
//$servername = "localhost";
//$username = "root";
//$password = "Swift_2018";
class DDNews {
    public $title = "";
    public $id = 0 ;
    public $hits = 0 ;
    public $addate = 0;
}

//local
$servername = "localhost";
$username = "root";
$password = "Swift_2018";
$dbName = "saixinjituan";


//echo phpinfo();
//exit;
// 创建连接
//$conn = new mysqli($servername, $username, $password,$dbName);
//或者
$conn = mysqli_connect($servername, $username, $password,$dbName);
// 检测连接
//if ($conn->connect_error) {
//    echo ("连接失败: " . $conn->connect_error . "<br>");
//}else{
//    echo ("连接成功");
//}
echo "error message1" . $conn->connect_error ;
echo "error message2" . mysqli_error($conn) ;
if (mysqli_error($conn)) {
    echo ("连接失败: " . $conn->connect_error . "<br>");
}else{
    echo ("连接成功");
}
$dataCharset = "set names utf8";
$setDataCharsetResult = mysqli_query($conn , $dataCharset);
if ($setDataCharsetResult){
    echo "字符集设置成功" . $setDataCharsetResult .  "<br/>";
}
$selectSql = "select id ,  title from 007_news where id <= 1150";
$queryResultArr = mysqli_query($conn,$selectSql);
?>
<div>测试数据</div>
<ul>
<?php?>

    <?php
    $sss = mysqli_fetch_array($queryResultArr);
    $sum = count($sss);
    echo $sum . "mmmm<br/>" ;
    var_dump($sss);
    for ($i=0 ; $i < $sum; ++$i){
        echo "$i <br/>";
    }
    $obj = mysqli_fetch_object($queryResultArr , "DDNews");
    echo json_decode($obj)  . "<br/><br/><br/><br/><br/><br/>";
    ?>

<?php while ($every_row = mysqli_fetch_assoc($queryResultArr)){ ?>
    <li>
    <?php echo $every_row['id'] . "-------" . $every_row['title'] . "<br/>";?>




    </li>
<?php } ?>
</ul>

<?php
//$row = mysqli_fetch_all($queryResultArr);
//echo $row . "<br/>";
//var_dump($row);
//$str = array("hello" => "world") ;
//echo json_encode($str);

//testPara("name" , 2);
//syntax::testPara("John" , 15 , 1);
echo  $_SERVER["REMOTE_ADDR"];//获取访问者的ip地址
?>



</div>