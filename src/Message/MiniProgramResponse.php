<?php

namespace Omnipay\Paycats\Message;

class MiniProgramResponse extends BaseAbstractResponse
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
