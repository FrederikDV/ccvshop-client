<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Mailingaddresses\Post;

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
     * @var string Name of mailingaddress owner
     */
    private string $name;

    /**
     * @var string|null Companyname of mailingaddress owner
     */
    private ?string $companyname;

    /**
     * @var string Mailingaddress
     */
    private string $email;

    /**
     * @var string Language of mailingaddress owner
     */
    private string $language;

    /**
     * @var bool|null Is mailingaddress enabled
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
     * @return string Name of mailingaddress owner
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null Companyname of mailingaddress owner
     */
    public function getCompanyname(): ?string
    {
        return $this->companyname;
    }

    /**
     * @return string Mailingaddress
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string Language of mailingaddress owner
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return bool|null Is mailingaddress enabled
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * @param string $name Name of mailingaddress owner
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $companyname Companyname of mailingaddress owner
     * @return self
     */
    public function setCompanyname(?string $companyname): self
    {
        $this->companyname = $companyname;
        return $this;
    }

    /**
     * @param string $email Mailingaddress
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $language Language of mailingaddress owner
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param bool|null $enable Is mailingaddress enabled
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        return $this;
    }
}
