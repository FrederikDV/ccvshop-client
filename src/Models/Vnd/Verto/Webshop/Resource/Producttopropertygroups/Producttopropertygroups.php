<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttopropertygroups;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Producttopropertygroups implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private ?string $href;

    /**
     * @var int|null Unique id of the resource
     */
    private ?int $id;

    /**
     * @var int|null Unique id of the product
     */
    private ?int $productId;

    /**
     * @var int|null Unique id of the product property group
     */
    private ?int $productPropertyGroupId;

    /**
     * @var string|null Link to product
     */
    private ?string $productHref;

    /**
     * @var string|null Link to Product Property Group
     */
    private ?string $productPropertyGroupHref;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttopropertygroups\Child\Values|null Product values
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttopropertygroups\Child\Values $values;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null Unique id of the product
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return int|null Unique id of the product property group
     */
    public function getProductPropertyGroupId(): ?int
    {
        return $this->productPropertyGroupId;
    }

    /**
     * @return string|null Link to product
     */
    public function getProductHref(): ?string
    {
        return $this->productHref;
    }

    /**
     * @return string|null Link to Product Property Group
     */
    public function getProductPropertyGroupHref(): ?string
    {
        return $this->productPropertyGroupHref;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttopropertygroups\Child\Values|null Product values
     */
    public function getValues(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttopropertygroups\Child\Values
    {
        return $this->values;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int|null $productId Unique id of the product
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @param int|null $productPropertyGroupId Unique id of the product property group
     * @return self
     */
    public function setProductPropertyGroupId(?int $productPropertyGroupId): self
    {
        $this->productPropertyGroupId = $productPropertyGroupId;
        return $this;
    }

    /**
     * @param string|null $productHref Link to product
     * @return self
     */
    public function setProductHref(?string $productHref): self
    {
        $this->productHref = $productHref;
        return $this;
    }

    /**
     * @param string|null $productPropertyGroupHref Link to Product Property Group
     * @return self
     */
    public function setProductPropertyGroupHref(?string $productPropertyGroupHref): self
    {
        $this->productPropertyGroupHref = $productPropertyGroupHref;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttopropertygroups\Child\Values|null $values Product values
     * @return self
     */
    public function setValues(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttopropertygroups\Child\Values $values): self
    {
        $this->values = $values;
        return $this;
    }
}
