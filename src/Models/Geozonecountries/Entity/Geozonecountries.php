<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Geozonecountries\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Geozonecountries implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Name of the country.
     */
    private $country;

    /**
     * @var string Country code.
     */
    private $code;

    /**
     * @var int Unique identifier for the geozone this country is a part of.
     */
    private $geozoneId;

    /**
     * @var string Name of the geozone this country is a part of.
     */
    private $geozoneName;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Geozonecountries\Geozonecountries\Tariff[] Collection of the geozone countries.
     */
    private $tariffs;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Name of the country.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string Country code.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return int Unique identifier for the geozone this country is a part of.
     */
    public function getGeozoneId(): int
    {
        return $this->geozoneId;
    }

    /**
     * @return string Name of the geozone this country is a part of.
     */
    public function getGeozoneName(): string
    {
        return $this->geozoneName;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Geozonecountries\Geozonecountries\Tariff[] Collection of the geozone countries.
     */
    public function getTariffs(): array
    {
        return $this->tariffs;
    }

    /**
     * @param string $country Name of the country.
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        $this->propertyFilled('country');
        return $this;
    }

    /**
     * @param string $code Country code.
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        $this->propertyFilled('code');
        return $this;
    }

    /**
     * @param int $geozoneId Unique identifier for the geozone this country is a part of.
     * @return self
     */
    public function setGeozoneId(int $geozoneId): self
    {
        $this->geozoneId = $geozoneId;
        $this->propertyFilled('geozoneId');
        return $this;
    }

    /**
     * @param string $geozoneName Name of the geozone this country is a part of.
     * @return self
     */
    public function setGeozoneName(string $geozoneName): self
    {
        $this->geozoneName = $geozoneName;
        $this->propertyFilled('geozoneName');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Geozonecountries\Geozonecountries\Tariff[] $tariffs Collection of the geozone countries.
     * @return self
     */
    public function setTariffs(array $tariffs): self
    {
        $this->tariffs = $tariffs;
        $this->propertyFilled('tariffs');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'tariffs') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Geozonecountries\Geozonecountries\Tariff::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
