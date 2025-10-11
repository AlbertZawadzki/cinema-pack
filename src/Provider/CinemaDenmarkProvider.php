<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaDenmarkProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::DK);

        return [
            new CinemaDto(CinemaIdEnum::DK_VUE, $country, 'Vue', 'https://www.biografenvue.dk/', 'https://cms-assets.webediamovies.pro/cdn-cgi/image/dpr=1,fit=crop,gravity=auto,metadata=none,quality=85,width=250,height=102/production/4618/9d3616f41875a6727b9c82789d154ee8.png'),
        ];
    }
}