<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productattributevalues\Post;

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
     * @var int Attribute option value
     */
    private int $optionvalue;

    /**
     * @var float Attribute option value price
     */
    private float $price;

    /**
     * @var int|null Attribute option value position. When the position isn't filled the highest position will be used.
     */
    private ?int $position;

    /**
     * @var bool|null Deprecated. Attribute option value enable. Value is always true.
     */
    private ?bool $enable;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int Attribute option value
     */
    public function getOptionvalue(): int
    {
        return $this->optionvalue;
    }

    /**
     * @return float Attribute option value price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int|null Attribute option value position. When the position isn't filled the highest position will be used.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return bool|null Deprecated. Attribute option value enable. Value is always true.
     * @deprecated
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * @param int $optionvalue Attribute option value
     * @return self
     */
    public function setOptionvalue(int $optionvalue): self
    {
        $this->optionvalue = $optionvalue;
        return $this;
    }

    /**
     * @param float $price Attribute option value price
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param int|null $position Attribute option value position. When the position isn't filled the highest position will be used.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param bool|null $enable Deprecated. Attribute option value enable. Value is always true.
     * @return self
     * @deprecated
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        return $this;
    }
}
