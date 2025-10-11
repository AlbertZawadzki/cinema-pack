<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaIcelandProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::IS);

        return [
            new CinemaDto(CinemaIdEnum::IS_BIO_PARADIS, $country, 'Bio paradis', 'https://bioparadis.is', 'https://bioparadis.is/wp-content/themes/bioparadis/library/bioparadis-logo.svg'),
        ];
    }
}