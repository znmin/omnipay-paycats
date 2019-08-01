<?php

namespace Omnipay\Paycats\Message;

use Omnipay\Common\Message\ResponseInterface;
use Paycats\Sdk\Signature;

class CompletePurchaseRequest extends BaseAbstractRequest
{
    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $data = [
            'mch_id' => $this->getParameter('mch_id'),
            'total_fee' => $this->getParameter('total_fee'),
            'out_trade_no' => $this->getParameter('out_trade_no'),
            'body' => $this->getParameter('body'),
            'attach' => $this->getParameter('attach'),
            'user_id' => $this->getParameter('user_id'),
            'notify_type' => $this->getParameter('notify_type'),
            'transaction_id' => $this->getParameter('transaction_id'),
            'pay_at' => $this->getParameter('pay_at'),
            'openid' => $this->getParameter('openid'),
        ];

        $data['sign'] = Signature::make($data, $this->getParameter('key'));

        return $data;
    }

    /**
     * Send the request with specified data
     *
     * @param mixed $data The data to send
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        return $this->response = new CompletePurchaseResponse($this, $data);
    }

    public function setNotifyType($notify_type)
    {
        $this->setParameter('notify_type', $notify_type);
    }

    public function setTransactionId($transaction_id)
    {
        $this->setParameter('transaction_id', $transaction_id);
    }

    public function setPayAt($pay_at)
    {
        $this->setParameter('pay_at', $pay_at);
    }

    public function setOpenid($openid)
    {
        $this->setParameter('openid', $openid);
    }
}
