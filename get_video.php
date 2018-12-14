<?php
/**
 * Created by PhpStorm.
 * User: wy
 * Date: 2018/12/13
 * Time: 16:21
 */

$a = array( "http://172.16.4.36/07.Cinderella.mp4");
$arr = scandir("./videos");
$tempArr = array();
for($i = 0 ; $i < count($arr) ; $i++){
    $domain = "http://172.16.4.36/";
    $targetName = $arr[$i];
    $isMp4 = strstr($targetName,"mp4");

    if ($isMp4){
        $result = $domain . $arr[$i];
        array_push($tempArr , $result);
    }
}
echo json_encode($tempArr);

?>