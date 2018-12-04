<?php
/**
 * Created by PhpStorm.
 * User: wy
 * Date: 2018/11/26
 * Time: 14:31
 */
//$age = 2;
require "syntax.php";//如果想调用syntax.php文件中的函数 , 需要加这一句 或者require_once "syntax.php"; 或 include "syntax.php";

testPara("name" , 2);
//syntax::testPara("John" , 15 , 1);
class ss {
    /**
     *
     */
    function  kk() {
        echo  "";
    }
}
$age = 2;
testPara("jonason" , $age);
?>