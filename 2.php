<?php

$redis = new Redis();
$redis->connect('127.0.0.1');

$key = 'bbb';
$aaa = intval($_GET['aaa']);
$data=$redis->zrange($key,0,-1);
$res=in_array($aaa,$data);
if($res){
    echo 'no';
}else{
    $redis->zAdd($key,time(),$aaa);
    echo 'ok';
}

?>