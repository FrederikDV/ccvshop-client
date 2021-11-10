<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Webhooks\Post;

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
     * @var string Event name, on which WebHook is triggered.
     */
    private string $event;

    /**
     * @var string Uri that will be called once the WebHook event is triggered.
     */
    private string $address;

    /**
     * @var bool|null True if the WebHook is active. Disabled WebHooks will not be triggered.
     */
    private ?bool $isActive;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Event name, on which WebHook is triggered.
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @return string Uri that will be called once the WebHook event is triggered.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return bool|null True if the WebHook is active. Disabled WebHooks will not be triggered.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @param string $event Event name, on which WebHook is triggered.
     * @return self
     */
    public function setEvent(string $event): self
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @param string $address Uri that will be called once the WebHook event is triggered.
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param bool|null $isActive True if the WebHook is active. Disabled WebHooks will not be triggered.
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
}
