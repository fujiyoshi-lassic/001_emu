<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// <editor-fold defaultstate="collapsed" desc="パラメータ設定">
/*
 * パラメータ設定
 */
$userid;
$keyid;
$onetimekey;
$drm_key_id;
// </editor-fold>


// <editor-fold defaultstate="collapsed" desc="PlayerからのJSONデータの受け取り">
/*
 * PlayerからのJSONデータの受け取り
 */
$json_string = file_get_contents('php://input'); ##今回のキモ
//print_r($_GET);
//print_r($json_string);
$obj = json_decode($json_string);
//print_r($obj);
//$userid = $obj->userid;
//$keyid = $obj->keyid;
//$onetimekey = $obj->onetimekey;
//$drm_key_id = $obj->drm_key_id;
// </editor-fold>


// <editor-fold defaultstate="collapsed" desc="視聴WEBから購入情報取得">
/*
 * 視聴WEBから購入情報取得
 */
include_once '../ViewingServer/lib/innerClass.php';
$location = 'http://localhost/ViewingServer/SoapServer.php';  // サーバーURL
$uri = 'http://localhost/ViewingServer/';
try {
    $client = new SoapClient(null, array(
        'location' => $location,
        'uri' => $uri,
        'trace' => 1
    ));
    $soap = new purchaseQueryInfo();
    $soap->customerId = 'customerId';
    $soap->authPath = 'authPath';
    $soap->userId = 'userId';
    $soap->keyId = 'keyId';
    $result = $client->GetPurchaseInfo($soap);
    //print_r($result);
}     catch (Exception $e) {
    
}
// </editor-fold>


$output = array(
    "returnCd"=>"0",
    "tokenInfo"      => "AAAAAAAAAA564654564654564654564564564sdfasdfdsgadf4gdsf5hgs455sfdA",
    "usageType"      => "RENTAL",
    "beginDate"      => "2016/02/15 12:15:10",
    "expirationDate" => "2016/09/15 12:15:10",
    "messageText"    => "",
);
header( 'Content-Type: text/javascript; charset=utf-8' );
echo $_GET['callback'] . "(" . json_encode($output). ")";




