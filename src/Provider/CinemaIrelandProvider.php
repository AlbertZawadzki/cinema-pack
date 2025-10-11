<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaIrelandProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    public function getAll()
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::GB);

        return [
           new CinemaDto(CinemaIdEnum::IE_IMC, $country, 'IMC cinemas', 'https://www.imccinemas.ie', "https://imc.ie/wp-content/themes/A1cinemachain/img/imc.svg"),
        ];
    }
}