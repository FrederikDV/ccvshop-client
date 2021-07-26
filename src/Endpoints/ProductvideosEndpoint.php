<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductvideosEndpoint extends BaseEndpoint
{
    /**
     * Delete a product video. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productvideos/' . $id . '/',
        );
    }
    
    /**
     * Get all videos that belong to this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProduct(int $id, \JacobDeKeizer\Ccv\Parameters\Productvideos\AllFromProduct $parameter = null): \JacobDeKeizer\Ccv\Models\Productvideos\Collection\Productvideos
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productvideos\AllFromProduct();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productvideos/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productvideos\Collection\Productvideos::fromArray($result);
    }
    
    /**
     * Get one product video. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productvideos\Resource\Productvideos
    {
        $result = $this->doRequest(
            self::GET,
            'productvideos/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productvideos\Resource\Productvideos::fromArray($result);
    }
    
    /**
     * Patch a product video. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productvideos\Productvideos\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productvideos/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a video for this product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createForProduct(int $id, \JacobDeKeizer\Ccv\Models\Productvideos\Productvideos\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productvideos\Resource\Productvideos
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productvideos/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Productvideos\Resource\Productvideos::fromArray($result);
    }
}
