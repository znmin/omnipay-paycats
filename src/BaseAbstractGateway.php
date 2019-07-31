<?php

namespace Omnipay\Paycats;

use Omnipay\Common\AbstractGateway;

abstract class BaseAbstractGateway extends AbstractGateway
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

}
