<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaSwedenProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::SE);

        return [
            new CinemaDto(CinemaIdEnum::SE_FILMSTADEN, $country, 'Filmstaden', 'https://www.filmstaden.se', 'https://images.ctfassets.net/ha69n8ghbltw/2RUuxF1h5556yOB2BV9c97/a1328248232c98c32f011ecf3cd65897/temp_logo_filmstaden.svg?h=32&q=70'),
        ];
    }
}