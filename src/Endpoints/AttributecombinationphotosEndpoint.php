<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class AttributecombinationphotosEndpoint extends BaseEndpoint
{
    /**
     * Delete a AttributeCombinationPhoto. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'attributecombinationphotos/' . $id . '/',
        );
    }

    /**
     * Gets all values for the attribute. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromAttributecombination(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Attributecombinationphotos\Attributecombinationphotos
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/attributecombinationphotos/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Attributecombinationphotos\Attributecombinationphotos::fromArray($result);
    }

    /**
     * Gets a single Attribute Combination Photo. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinationphotos/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto::fromArray($result);
    }

    /**
     * Patch a AttributeCombinationPhoto. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Attributecombinationphotos\Patch\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'attributecombinationphotos/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post a Attribute combination photo. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForAttributecombination(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Attributecombinationphotos\Post\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto
    {
        $result = $this->doRequest(
            self::POST,
            'attributecombinations/' . $id . '/attributecombinationphotos/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto::fromArray($result);
    }
}
