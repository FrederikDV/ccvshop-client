<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Attributecombinationphotos\Post;

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
     * @var string Photo extension
     */
    private string $fileType;

    /**
     * @var string|null Alternative name
     */
    private ?string $alt;

    /**
     * @var bool|null Picture is the main photo
     */
    private ?bool $isMainphoto;

    /**
     * @var string Attachment source base 64 encoded
     */
    private string $source;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Photo extension
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }

    /**
     * @return string|null Alternative name
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    /**
     * @return bool|null Picture is the main photo
     */
    public function getIsMainphoto(): ?bool
    {
        return $this->isMainphoto;
    }

    /**
     * @return string Attachment source base 64 encoded
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $fileType Photo extension
     * @return self
     */
    public function setFileType(string $fileType): self
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @param string|null $alt Alternative name
     * @return self
     */
    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }

    /**
     * @param bool|null $isMainphoto Picture is the main photo
     * @return self
     */
    public function setIsMainphoto(?bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        return $this;
    }

    /**
     * @param string $source Attachment source base 64 encoded
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->source = $source;
        return $this;
    }
}
