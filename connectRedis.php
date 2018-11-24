<?php
/**
 * Created by PhpStorm.
 * User: wy
 * Date: 2018/11/24
 * Time: 10:09
 */
$redis = new Redis();
$redis->connect("127.0.0.1",6379);
echo  "Connect to server successfully";
echo  "Server is running: " . $redis->ping();
?>