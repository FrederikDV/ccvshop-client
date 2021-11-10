<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Discountcoupons\Post;

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
     * @var string Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     */
    private string $code;

    /**
     * @var float The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     */
    private float $discount;

    /**
     * @var string Discount type.
     */
    private string $type;

    /**
     * @var string Begin date coupon validity, UTC
     */
    private string $begindate;

    /**
     * @var string|null End date coupon validity, UTC
     */
    private ?string $enddate;

    /**
     * @var bool One time use. After usage this coupon will be removed.
     */
    private bool $onetimeuse;

    /**
     * @var bool This coupon gives free shipping costs.
     */
    private bool $givesfreeshipping;

    /**
     * @var float Minimum price of the order before this coupon can be used.
     */
    private float $minimumprice;

    /**
     * @var bool|null Product white list. If true, the discount will only used for selected products. If false, the discount is used for all products, excepts the selected ones.
     */
    private ?bool $productwhitelist;

    /**
     * @var int[]|null Product id's for the product white/black list.
     */
    private ?array $products;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return float The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return string Discount type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string Begin date coupon validity, UTC
     */
    public function getBegindate(): string
    {
        return $this->begindate;
    }

    /**
     * @return string|null End date coupon validity, UTC
     */
    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    /**
     * @return bool One time use. After usage this coupon will be removed.
     */
    public function getOnetimeuse(): bool
    {
        return $this->onetimeuse;
    }

    /**
     * @return bool This coupon gives free shipping costs.
     */
    public function getGivesfreeshipping(): bool
    {
        return $this->givesfreeshipping;
    }

    /**
     * @return float Minimum price of the order before this coupon can be used.
     */
    public function getMinimumprice(): float
    {
        return $this->minimumprice;
    }

    /**
     * @return bool|null Product white list. If true, the discount will only used for selected products. If false, the discount is used for all products, excepts the selected ones.
     */
    public function getProductwhitelist(): ?bool
    {
        return $this->productwhitelist;
    }

    /**
     * @return int[]|null Product id's for the product white/black list.
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param string $code Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param float $discount The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param string $type Discount type.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $begindate Begin date coupon validity, UTC
     * @return self
     */
    public function setBegindate(string $begindate): self
    {
        $this->begindate = $begindate;
        return $this;
    }

    /**
     * @param string|null $enddate End date coupon validity, UTC
     * @return self
     */
    public function setEnddate(?string $enddate): self
    {
        $this->enddate = $enddate;
        return $this;
    }

    /**
     * @param bool $onetimeuse One time use. After usage this coupon will be removed.
     * @return self
     */
    public function setOnetimeuse(bool $onetimeuse): self
    {
        $this->onetimeuse = $onetimeuse;
        return $this;
    }

    /**
     * @param bool $givesfreeshipping This coupon gives free shipping costs.
     * @return self
     */
    public function setGivesfreeshipping(bool $givesfreeshipping): self
    {
        $this->givesfreeshipping = $givesfreeshipping;
        return $this;
    }

    /**
     * @param float $minimumprice Minimum price of the order before this coupon can be used.
     * @return self
     */
    public function setMinimumprice(float $minimumprice): self
    {
        $this->minimumprice = $minimumprice;
        return $this;
    }

    /**
     * @param bool|null $productwhitelist Product white list. If true, the discount will only used for selected products. If false, the discount is used for all products, excepts the selected ones.
     * @return self
     */
    public function setProductwhitelist(?bool $productwhitelist): self
    {
        $this->productwhitelist = $productwhitelist;
        return $this;
    }

    /**
     * @param int[]|null $products Product id's for the product white/black list.
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
        return $this;
    }
}
