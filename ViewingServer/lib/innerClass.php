<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of innerClass
 *
 * @author fujiyohi
 */
/**
 * in
 */
class purchaseQueryInfo{
    /**
     * コンテンツプロバイダID
     * @var String customerId
     */
    public $CustomerId = '';
    /**
     * コンテンツプロバイダパスワード
     * @var String authPath
     */
    public $AuthPass   = '';
    /**
     * ユーザID
     * @var String userId
     */
    public $UserId     = '';
    /**
     * チェック対象のコンテンツ識別子
     * @var String keyId
     */
    public $KeyId      = '';
}
/**
 * out
 */
class purchaseQueryResult{
    private $queryResult    = 0;
    private $businessModel  = 'RENTAL';
    private $beginDate      = null;
    private $expirationDate = null;
    private $gracePeriod    = null;
    function purchaseQueryResult(){
        $this->queryResult = 0;
        $this->businessModel = 'RENTAL';
        $this->beginDate = new DateTime();
        $this->beginDate->modify('-1 months');
        $this->expirationDate = new DateTime();
        $this->expirationDate->modify('+1 months');
        $this->gracePeriod = $this->expirationDate->diff($this->beginDate);
    }
}
