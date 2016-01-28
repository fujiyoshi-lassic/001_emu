<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// JSONデータの受け取り処理
// TODO:http://takuya-1st.hatenablog.jp/entry/2013/07/19/221203
$json_string = file_get_contents('php://input'); ##今回のキモ

$returnObj = array("error_code" =>11,"error_message" => "json parse fail");

//echo $json_string;
$obj = json_decode($json_string);
$ret = json_encode($returnObj);
//var_dump($obj);


// 受け取ったJSONデータを展開して、返値(トークン)を生成
//print($ret);
print('AAAAAAAAAAAAAAAAAAAAAN8ZEJldGT870q01bxi1hFdwCtQ26FRBRkv2Xod92wnEJYeyOAvj3y0YR1yCrwwMI2HhwsLOFeuZ1u2ZOSouVa8D7/wLva0XcZsjiCZVmQm2jDCCYJfE8Tu648tr/OYBtSonv1n1RYMrmlRjlSkrz0tPqoaV1y3YwPXKtj8moeKtKf5DsXIRxThGcC+WgiPBYX2kTRNQJ7naGsosTVZ/szhdy/wEIPAyfJAJpBYlzU4jGy22QVJXjwiCmrYisdB4MnaSNtMyRSaTYbTYzpo5xm4f5lYKZUdYxVugnSrrFIm0gk35R+X4lUyIKscv1Y6xMAdlEuGcjOUbg6fYV/cPrlKLA1CT4KqFSCPJBjvZSiU7SDbXg+CO42Kcp54xqrOlOd3KDMgWoH8UMGcmalVYLvC+lpyviJ7OaYhBohrQoQpXgCWL4oMdXLePuxCK2sOaCapHZhIGaAYIyuPdRXAoav+s8+OO/rdzFeyyxJS5Qp1WzwGPycECGlqeV4j4aMk3Nu+LivTqPEA8VP+wU3MTZj4wzaAJpBqZNKZHQIWTSONF3UnB6Tocb2ukbM/L0qeMq+CDMpJSPsxVIaC6IBNtId4iVJr6Xon8pVTpj5fPek+dKuiMv8xSJ+JmAAVvhzF8WXUksv3aR1XRAKbvrWrfl5qSQmvuCljrczQVMi/6NkOP+8n8FRp7yeIdrUUSKo7Rm/kNwUMv+umUdDp6QTO0NkkI5gSIuPFMZTjTQo/P1iP42aNpYRGFTjyd4WVDUfeo26cQrIDiB84+pytKZ/eNwt/hCJAcyVUtje740Wn8/dC7RvOcJUKuplBZThfmR/1V/qqX9CtX3r2+NtlVXLgP8ZXU/csiRWbSn1FpSa9VbFj5GBYOMqEAVVaa4+i/PEK7vlVEk6Fx0nh+JjHy1pHx4ruZFNjMAT1z84jf7efNbV4dbORtvvkBUDbroIhWQUvezQnB50Xoo5QE2HSGzDA0SREktn0QfXYTroNPHOXbJYHAMFJTX1cIb4T4zCR9wKdxZPtnar46sML6VeDEJ871Ce3cWixMFOUrureIaE7Bgjm2J2fFE9mY93oH9gCt2cWMFQ==');

