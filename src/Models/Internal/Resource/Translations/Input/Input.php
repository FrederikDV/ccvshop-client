<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Translations\Input;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Input implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Resource\Translations\Input\Child\Translations[] Collection of translations.
     */
    private $translations;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Resource\Translations\Input\Child\Translations[] Collection of translations.
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Resource\Translations\Input\Child\Translations ...$translations $translations Collection of translations.
     * @return self
     */
    public function setTranslations(\JacobDeKeizer\Ccv\Models\Internal\Resource\Translations\Input\Child\Translations ...$translations): self
    {
        $this->translations = $translations;
        $this->propertyFilled('translations');
        return $this;
    }
}
