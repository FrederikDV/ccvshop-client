<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Labels;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Labels implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null Unique id of the resource
     */
    private ?int $id;

    /**
     * @var string Uri to the image. These images will be shown as icons as 16x16.
     */
    private string $imageLocation;

    /**
     * @var string|null Descriptive label that will be shown as tooltip of the image. Also as label in the filters.
     */
    private ?string $tooltip;

    /**
     * @var bool If TRUE this label will be added as filter on the product collection page.
     */
    private bool $showOnProducts;

    /**
     * @var bool If TRUE this label will be added as filter on the order collection page.
     */
    private bool $showOnOrders;

    /**
     * @var bool If TRUE this label will be added as filter on the invoice collection page.
     */
    private bool $showOnInvoices;

    /**
     * @var string Href to this resource
     */
    private string $href;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string Uri to the image. These images will be shown as icons as 16x16.
     */
    public function getImageLocation(): string
    {
        return $this->imageLocation;
    }

    /**
     * @return string|null Descriptive label that will be shown as tooltip of the image. Also as label in the filters.
     */
    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    /**
     * @return bool If TRUE this label will be added as filter on the product collection page.
     */
    public function getShowOnProducts(): bool
    {
        return $this->showOnProducts;
    }

    /**
     * @return bool If TRUE this label will be added as filter on the order collection page.
     */
    public function getShowOnOrders(): bool
    {
        return $this->showOnOrders;
    }

    /**
     * @return bool If TRUE this label will be added as filter on the invoice collection page.
     */
    public function getShowOnInvoices(): bool
    {
        return $this->showOnInvoices;
    }

    /**
     * @return string Href to this resource
     */
    public function getHref(): string
    {
        return $this->href;
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
     * @param string $imageLocation Uri to the image. These images will be shown as icons as 16x16.
     * @return self
     */
    public function setImageLocation(string $imageLocation): self
    {
        $this->imageLocation = $imageLocation;
        return $this;
    }

    /**
     * @param string|null $tooltip Descriptive label that will be shown as tooltip of the image. Also as label in the filters.
     * @return self
     */
    public function setTooltip(?string $tooltip): self
    {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * @param bool $showOnProducts If TRUE this label will be added as filter on the product collection page.
     * @return self
     */
    public function setShowOnProducts(bool $showOnProducts): self
    {
        $this->showOnProducts = $showOnProducts;
        return $this;
    }

    /**
     * @param bool $showOnOrders If TRUE this label will be added as filter on the order collection page.
     * @return self
     */
    public function setShowOnOrders(bool $showOnOrders): self
    {
        $this->showOnOrders = $showOnOrders;
        return $this;
    }

    /**
     * @param bool $showOnInvoices If TRUE this label will be added as filter on the invoice collection page.
     * @return self
     */
    public function setShowOnInvoices(bool $showOnInvoices): self
    {
        $this->showOnInvoices = $showOnInvoices;
        return $this;
    }

    /**
     * @param string $href Href to this resource
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }
}
