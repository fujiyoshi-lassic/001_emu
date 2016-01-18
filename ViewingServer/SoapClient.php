<?php
include_once './lib/innerClass.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$location = 'http://view-sv/ViewingServer/SoapServer.php';  // サーバーURL
$uri = 'http://view-sv/ViewingServer/';

try {
  $client = new SoapClient(null,array(
  'location'=> $location,
  'uri' => $uri,
  'trace' => 1
  ));

//  $result = $client->hello(mb_convert_encoding("なまえ", 'utf-8'));
//  echo mb_convert_encoding($result, mb_internal_encoding(), 'utf-8');

//  $user = new stdClass();
//  $user->name = mb_convert_encoding("はろーわーるど", 'utf-8');
//  $user->url = 'http://localhost/';
//  $result = $client->helloByObj($user);
//  echo mb_convert_encoding($result, mb_internal_encoding(), 'utf-8');
  
  $soap = new purchaseQueryInfo();
  $soap->customerId = 'customerId';
  $soap->authPath   = 'authPath';
  $soap->userId     = 'userId';
  $soap->keyId      = 'keyId';
  $result = $client->GetPurchaseInfo($soap);
  print_r($result);
}
catch (Exception $e) {
}