<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Disabledpaymethods;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Disabledpaymethods implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int The id of the Payment Service Provider. This can be used to filter in the order resource.
     */
    private int $id;

    /**
     * @var string The Payment method, can be a sub brand of the psp. This can be empty.
     */
    private string $method;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int The id of the Payment Service Provider. This can be used to filter in the order resource.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string The Payment method, can be a sub brand of the psp. This can be empty.
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param int $id The id of the Payment Service Provider. This can be used to filter in the order resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $method The Payment method, can be a sub brand of the psp. This can be empty.
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }
}
