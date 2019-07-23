<?php
/**
 * Copyright (c) On Tap Networks Limited.
 */

namespace MasterCard\SimplifyCommerce\Gateway\Http\Client;

class CustomerCreate extends AbstractTransaction
{
    /**
     * @param array $data
     * @return mixed
     */
    protected function process(array $data)
    {
        return $this->adapterFactory->create()
            ->createCustomer($data);
    }
}
