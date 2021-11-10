<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrowattributevalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Orderrowattributevalues implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int|null Order row attribute value Id
     */
    private ?int $id;

    /**
     * @var string|null Name of the option (attribute)
     */
    private ?string $optionName;

    /**
     * @var string|null Name of the attribute value
     */
    private ?string $valueName;

    /**
     * @var float|null Extra price added to the order row.
     */
    private ?float $price;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrowattributevalues\Child\ParentItem|null Contains link to parent resource.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrowattributevalues\Child\ParentItem $parent;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int|null Order row attribute value Id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Name of the option (attribute)
     */
    public function getOptionName(): ?string
    {
        return $this->optionName;
    }

    /**
     * @return string|null Name of the attribute value
     */
    public function getValueName(): ?string
    {
        return $this->valueName;
    }

    /**
     * @return float|null Extra price added to the order row.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrowattributevalues\Child\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrowattributevalues\Child\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int|null $id Order row attribute value Id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $optionName Name of the option (attribute)
     * @return self
     */
    public function setOptionName(?string $optionName): self
    {
        $this->optionName = $optionName;
        return $this;
    }

    /**
     * @param string|null $valueName Name of the attribute value
     * @return self
     */
    public function setValueName(?string $valueName): self
    {
        $this->valueName = $valueName;
        return $this;
    }

    /**
     * @param float|null $price Extra price added to the order row.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrowattributevalues\Child\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrowattributevalues\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
