<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class PaymethodsEndpoint extends BaseEndpoint
{
    /**
     * Get all paymethods that are activated in the webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Paymethods\Paymethods
    {
        $result = $this->doRequest(
            self::GET,
            'paymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Paymethods\Paymethods::fromArray($result);
    }
}
