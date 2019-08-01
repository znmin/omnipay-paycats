<?php

namespace Omnipay\Paycats\Message;

class CompletePurchaseResponse extends BaseAbstractResponse
{
    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return true;
    }
}
