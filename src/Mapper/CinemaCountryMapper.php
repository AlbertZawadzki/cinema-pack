<?php

namespace CinemaPack\Mapper;

use CinemaPack\Contracts\CinemaCountryMapperInterface;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Dto\CountryDto;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaCountryMapper implements CinemaCountryMapperInterface
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    public function mapIdToCountry(CinemaIdEnum $id): ?CountryDto
    {
        $key = substr($id->value, 0, 2);
        $isoCode = Iso31661Alpha2::tryFrom(strtoupper($key));

        if (!$isoCode) {
            return null;
        }

        return $this->countryProvider->getByIso31661Alpha2($isoCode);
    }

}