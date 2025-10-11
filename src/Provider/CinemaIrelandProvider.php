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

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::IE);

        return [
            new CinemaDto(CinemaIdEnum::IE_IMC, $country, 'IMC cinemas', 'https://www.imccinemas.ie', "https://imc.ie/wp-content/themes/A1cinemachain/img/imc.svg"),
            new CinemaDto(CinemaIdEnum::IE_GATE_CINEMA, $country, 'Gate Cinema', 'https://gatecinemas.com', "https://gatecinemas.com/images/logo.png"),
            new CinemaDto(CinemaIdEnum::IE_ARC_CINEMA, $country, 'The Arc Cinema', 'https://arccinema.ie', "https://greatyarmouth.arccinema.co.uk/assets/images/logo_large.png"),
            new CinemaDto(CinemaIdEnum::IE_THE_W_CINEMA, $country, 'The W Cinema', 'https://www.thewcinema.com', "https://www.thewcinema.com/images/thewcinemalogo.png"),
            new CinemaDto(CinemaIdEnum::IE_REGAL, $country, 'Regal Cinema', 'https://regalcinema.ie', "https://regalcinema.ie/wp-content/themes/regal-cinema/assets/img/logo.png"),
            new CinemaDto(CinemaIdEnum::IE_MAYO_MOVIE_WORLD, $country, 'MAYO MOVIE WORLD', 'https://www.mayomovieworld.ie', "https://mayomovieworld.static.cinesync.io/images/theater/cinema/logo_(1).png"),
            new CinemaDto(CinemaIdEnum::IE_CINEWORLD, $country, 'Cineworld', 'https://www.cineworld.ie', "https://www.cineworld.ie/mrest/logos/v1/10109/logo.svg"),
            new CinemaDto(CinemaIdEnum::IE_VUE, $country, 'Vue', 'https://www.myvue.com', 'https://www.myvue.com/-/jssmedia/global/img/logo-header-vue.png?mw=300&mh=80&rev=5d978a6ad9c04cac97869073febdf5c4'),
            new CinemaDto(CinemaIdEnum::IE_CENTURY_CINEMA, $country, 'Century Cinemas', 'https://centurycinemas.ie', "https://centurycinemas.ie/images/cc-logo-header.png"),
            new CinemaDto(CinemaIdEnum::IE_THE_REEL_PICTURES, $country, 'The Reel Pictures', 'https://www.thereelpicture.com', "https://ballincollig.thereelpicture.com/assets/images/logo_large.png"),
            new CinemaDto(CinemaIdEnum::IE_OMNIPLEX, $country, 'Omniplex', 'https://www.omniplex.ie', "https://www.omniplex.ie/images/omniplex_logo.svg"),
            new CinemaDto(CinemaIdEnum::IE_CINEMA_KILLARNEY, $country, 'Cinema killarney', 'https://cinemakillarney.admit-one.eu', "https://www.cinemakillarney.com/assets/images/logo_large.png"),
            new CinemaDto(CinemaIdEnum::IE_ODEON, $country, 'Odeon', 'https://www.odeoncinemas.ie', "https://www.odeoncinemas.ie/media/ehgpomhe/odeon-logo-web.svg"),
            new CinemaDto(CinemaIdEnum::IE_EYE_CINEMA, $country, 'Eye cinema', 'https://www.eyecinema.ie', "https://cms-assets.webediamovies.pro/cdn-cgi/image/dpr=1,fit=crop,gravity=auto,metadata=none,quality=85,width=500,height=146/production/3575/ffadb451260e20b5a0da7a5a15187a0b.png"),
        ];
    }
}