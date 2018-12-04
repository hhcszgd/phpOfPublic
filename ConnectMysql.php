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



<?php
@exec("ipconfig /all",$array);
for($Tmpa;$Tmpa<count($array);$Tmpa++){
    if(eregi("Physical",$array[$Tmpa])){
        $mac=explode(":",$array[$Tmpa]);
        echo $mac[1];
    }
}
?>







<?php
function getMAC()
{
    @exec("ipconfig /all", $array);
    for ($Tmpa; $Tmpa < count($array); $Tmpa++) {
        if (eregi("Physical", $array[$Tmpa])) {
            $mac = explode(":", $array[$Tmpa]);
            return $mac[1];
        }
    }
}

echo getMAC();
//class GetMac{
//    var $result   = array();
//    var $macAddrs = array(); //所有mac地址
//    var $macAddr;            //第一个mac地址
//
//    function __construct($OS){
//        $this->GetMac($OS);
//    }
//
//    function GetMac($OS){
//        switch ( strtolower($OS) ){
//            case "unix": break;
//            case "solaris": break;
//            case "aix": break;
//            case "linux":
//                $this->getLinux();
//                break;
//            default:
//                $this->getWindows();
//                break;
//        }
//        $tem = array();
//        foreach($this->result as $val){
//            if(preg_match("/[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f]/i",$val,$tem) ){
//                $this->macAddr = $tem[0];//多个网卡时，会返回第一个网卡的mac地址，一般够用。
//                break;
//                //$this->macAddrs[] = $temp_array[0];//返回所有的mac地址
//            }
//        }
//        unset($temp_array);
//        return $this->macAddr;
//    }
//    //Linux系统
//    function getLinux(){
//        @exec("ifconfig -a", $this->result);
//        return $this->result;
//    }
//    //Windows系统
//    function getWindows(){
//        @exec("ipconfig /all", $this->result);
//        if ( $this->result ) {
//            return $this->result;
//        } else {
//            $ipconfig = $_SERVER["WINDIR"]."\system32\ipconfig.exe";
//            if(is_file($ipconfig)) {
//                @exec($ipconfig." /all", $this->result);
//            } else {
//                @exec($_SERVER["WINDIR"]."\system\ipconfig.exe /all", $this->result);
//                return $this->result;
//            }
//        }
//    }
//}
//
//$obj = new GetMac(PHP_OS);
//print_r($obj->result);
//echo $obj->macAddr;
//获取客户端
//$result=`arp -a $REMOTE_ADDR`;
//$result=`nbtstat -a $REMOTE_ADDR`;
//print_r($result);

?>

