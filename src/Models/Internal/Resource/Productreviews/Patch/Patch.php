<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productreviews\Patch;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Patch implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var bool Is the review approved for publishing.
     */
    private bool $approved;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return bool Is the review approved for publishing.
     */
    public function getApproved(): bool
    {
        return $this->approved;
    }

    /**
     * @param bool $approved Is the review approved for publishing.
     * @return self
     */
    public function setApproved(bool $approved): self
    {
        $this->approved = $approved;
        return $this;
    }
}
