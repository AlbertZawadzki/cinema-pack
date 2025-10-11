<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaNetherlandsProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::NL);

        return [
            new CinemaDto(CinemaIdEnum::NL_C_CINEMA, $country, 'C Cinema', 'https://www.c-cinema.nl', null),
            new CinemaDto(CinemaIdEnum::NL_KOK_CINEMAXX, $country, 'KOK Cinemaxx', 'https://www.kokcinemaxx.nl', 'https://www.kokcinemaxx.nl/wp-content/uploads/sites/2/2022/07/logo_kokcinemaxx.png'),
            new CinemaDto(CinemaIdEnum::NL_DAVINCI_GOES, $country, 'Davinci Goes', 'https://bioscoopgoes.nl', 'https://bioscoopgoes.nl/assets/components/bioscoopgoes/templates/images/logo.svg'),
            new CinemaDto(CinemaIdEnum::NL_CINECITY, $country, 'CineCity', 'https://www.cinecity.nl', 'https://www.cinecity.nl/assets/gfx/logo_site.png'),
            new CinemaDto(CinemaIdEnum::NL_PATHE, $country, 'Pathe', 'https://pathe.nl', 'https://www.pathe.nl/assets/source/img/logo-international-white.svg'),
            new CinemaDto(CinemaIdEnum::NL_VUE, $country, 'VUE', 'https://www.vuecinemas.nl', 'https://www.myvue.com/-/jssmedia/global/img/logo-header-vue.png?mw=300&mh=80&rev=5d978a6ad9c04cac97869073febdf5c4'),
            new CinemaDto(CinemaIdEnum::NL_KINEPOLIS, $country, 'Kinepolis', 'https://kinepolis.nl', 'https://kinepolis.nl/sites/all/themes/custom/kinepolis_zen/logo.png'),
        ];
    }
}