<?php

namespace Omnipay\Paycats\Message;

use Omnipay\Common\Message\AbstractRequest;

abstract class BaseAbstractRequest extends AbstractRequest
{
    /**
     * 商户id
     *
     * @param mixed $mch_id
     */
    public function setMchId($mch_id)
    {
        $this->setParameter('mch_id', $mch_id);
    }

    /**
     * 秘钥
     *
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->setParameter('key', $key);
    }

    /**
     * 金额
     */
    public function setTotalFee($total_fee)
    {
        $this->setParameter('total_fee', $total_fee);
    }

    /**
     * 商户订单号
     *
     * @param $out_trade_no
     */
    public function setOutTradeNo($out_trade_no)
    {
        $this->setParameter('out_trade_no', $out_trade_no);
    }

    /**
     * 订单标题
     *
     * @param $body
     */
    public function setBody($body)
    {
        $this->setParameter('body', $body);
    }

    /**
     * 自定义数据
     *
     * @param $attach
     */
    public function setAttach($attach)
    {
        $this->setParameter('attach', $attach);
    }

    /**
     * 商户的用户id
     *
     * @param $attach
     */
    public function setUserId($user_id)
    {
        $this->setParameter('user_id', $user_id);
    }
}
