<?php

namespace Omnipay\Paycats\Message;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Paycats\Signature;

class MiniProgramRequest extends BaseAbstractRequest
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
        $this->validate('mch_id', 'total_fee', 'out_trade_no', 'body', 'key');

        $data = [
            'mch_id' => $this->getParameter('mch_id'),
            'total_fee' => $this->getParameter('total_fee'),
            'out_trade_no' => $this->getParameter('out_trade_no'),
            'body' => $this->getParameter('body'),
            'attach' => $this->getParameter('attach'),
            'user_id' => $this->getParameter('user_id'),
        ];

        $data = array_filter($data);

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
        return $this->response = new MiniProgramResponse($this, $data);
    }
}
