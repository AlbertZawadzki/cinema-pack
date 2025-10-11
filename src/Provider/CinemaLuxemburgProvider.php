<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaLuxemburgProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::LU);

        return [
            new CinemaDto(CinemaIdEnum::LU_KINEPOLIS, $country, 'Kinepolis', 'https://kinepolis.lu', 'https://kinepolis.lu/sites/all/themes/custom/kinepolis_zen/logo.png'),
        ];
    }
}