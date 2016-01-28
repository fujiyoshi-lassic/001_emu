<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$retObj = array(
    'returnCd' => 5,
    'messsage' => 'test desu',
    'hairetu' => array(
        'A001',
        'B001',
        'C001'
    )
);

print(json_encode( $retObj , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));

