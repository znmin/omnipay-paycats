<?php

namespace Omnipay\Paycats;

use Omnipay\Paycats\Message\MiniProgramRequest;

class MiniProgramGateway extends BaseAbstractGateway
{
    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     * @return string
     */
    public function getName()
    {
        return 'Paycats Mini Program';
    }

    public function purchase($parameters = [])
    {
        return $this->createRequest(MiniProgramRequest::class, $parameters);
    }
}
