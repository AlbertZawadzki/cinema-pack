<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaBelgiumProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::BE);

        return [
            new CinemaDto(CinemaIdEnum::BE_PATHE, $country, 'Pathe Belgique', 'https://www.pathe.be', 'https://www.pathe.be/assets/source/img/logo-international-white.svg'),
            new CinemaDto(CinemaIdEnum::BE_KINEPOLIS, $country, 'Kinepolis', 'https://kinepolis.be', 'https://kinepolis.be/sites/all/themes/custom/kinepolis_zen/logo.png'),
        ];
    }
}