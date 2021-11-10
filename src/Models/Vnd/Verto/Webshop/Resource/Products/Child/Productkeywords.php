<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Products\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productkeywords implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to collection of product keywords
     */
    private $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Productkeywords[] Array with collection items
     */
    private $collection;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to collection of product keywords
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Productkeywords[] Array with collection items
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * @param string $href Link to collection of product keywords
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Productkeywords ...$collection $collection Array with collection items
     * @return self
     */
    public function setCollection(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productkeywords\Productkeywords ...$collection): self
    {
        $this->collection = $collection;
        $this->propertyFilled('collection');
        return $this;
    }
}
