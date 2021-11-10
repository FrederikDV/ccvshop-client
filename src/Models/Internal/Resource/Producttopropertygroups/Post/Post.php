<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Producttopropertygroups\Post;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int Unique product id
     */
    private int $productId;

    /**
     * @var int Unique id of the product property group
     */
    private int $productPropertyGroupId;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int Unique product id
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return int Unique id of the product property group
     */
    public function getProductPropertyGroupId(): int
    {
        return $this->productPropertyGroupId;
    }

    /**
     * @param int $productId Unique product id
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @param int $productPropertyGroupId Unique id of the product property group
     * @return self
     */
    public function setProductPropertyGroupId(int $productPropertyGroupId): self
    {
        $this->productPropertyGroupId = $productPropertyGroupId;
        return $this;
    }
}
