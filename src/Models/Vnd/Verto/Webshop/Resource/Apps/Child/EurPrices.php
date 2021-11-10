<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Apps\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class EurPrices implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var float|null One time costs
     */
    private ?float $oneTimeCosts;

    /**
     * @var float|null Monthly time costs
     */
    private ?float $monthlyCosts;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return float|null One time costs
     */
    public function getOneTimeCosts(): ?float
    {
        return $this->oneTimeCosts;
    }

    /**
     * @return float|null Monthly time costs
     */
    public function getMonthlyCosts(): ?float
    {
        return $this->monthlyCosts;
    }

    /**
     * @param float|null $oneTimeCosts One time costs
     * @return self
     */
    public function setOneTimeCosts(?float $oneTimeCosts): self
    {
        $this->oneTimeCosts = $oneTimeCosts;
        return $this;
    }

    /**
     * @param float|null $monthlyCosts Monthly time costs
     * @return self
     */
    public function setMonthlyCosts(?float $monthlyCosts): self
    {
        $this->monthlyCosts = $monthlyCosts;
        return $this;
    }
}
