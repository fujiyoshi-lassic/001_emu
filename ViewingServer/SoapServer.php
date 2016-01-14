<?php
include_once './lib/innerClass.php';

mb_internal_encoding('utf-8');
mb_http_output('utf-8');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//関数
function hello($nm){
    return 'こんにちは、' . $nm . ' さん！';
}
function helloByObj($obj){
    return 'こんにちは、' . $obj->name . ' さん！';
}

function GetPurchaseInfo($purchaseQueryInfo){
    var_dump($purchaseQueryInfo);
    $retObj = new purchaseQueryResult();
    return $retObj;
}

// SOAPサーバオブジェクトの作成
$server = new SoapServer(null, array('uri' => 'http://localhost/ViewingServer/'));

// サービスの追加
$server->addFunction('hello');
$server->addFunction('helloByObj');
$server->addFunction('GetPurchaseInfo');

// サービスを実行
$server->handle();

