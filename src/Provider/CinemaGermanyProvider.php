<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaGermanyProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::DE);

        return [
            new CinemaDto(CinemaIdEnum::DE_SOEST_UNIVERSUM, $country, 'Soest Universum', 'https://universum-soest.com', 'https://cdn.cineweb.de/media/kinobilder/509/VvuLsMcyDvkpFJKLishWbJgMP6UEOuAJUpSFZxv2.png'),
            new CinemaDto(CinemaIdEnum::DE_KINOPLAST, $country, 'Kinoplast', 'https://kino-weil.de', null),
            new CinemaDto(CinemaIdEnum::DE_FILMFORUM, $country, 'FilmforUM', 'https://filmforum-schwedt.de', 'https://cdn.cineweb.de/media/kinobilder/664/5lEPzDiC8jlqBlliskSfyiTUaDc5PVNYHyYWTMn7.png?text=Logo'),
            new CinemaDto(CinemaIdEnum::DE_KINO_BOIZENBURG, $country, 'Kino Boizenburg', 'https://www.kino-boizenburg.de', 'https://static.wixstatic.com/media/d66ed0_a49e45a4963348eaa993a61a30399111~mv2.png/v1/fill/w_981,h_123,al_c,lg_1,q_85,enc_avif,quality_auto/Kino_Banner_Boizenburg.png'),
            new CinemaDto(CinemaIdEnum::DE_KINORAMA_UNNA, $country, 'Kinorama Unna', 'https://www.kino-unna.de', 'https://www.kino-unna.de/clients/69/img/logo.png'),
            new CinemaDto(CinemaIdEnum::DE_CAPITOL_LITTLE, $country, 'Capitol Little Red', 'https://capitol-kornwestheim.de', 'https://cdn.cineweb.de/media/kinobilder/417/Qw0dJMyKqyFtn1NBwBJbSrPSFaOlG2Rk2CXLnJRf.png'),
            new CinemaDto(CinemaIdEnum::DE_KINO_ZEIT, $country, 'Kino Zeit', 'https://www.kino-zeit.de', 'https://www.kino-zeit.de/themes/kinozeit/images/kino-zeit_logo.svg'),
            new CinemaDto(CinemaIdEnum::DE_CASABLANCA_ART, $country, 'CasaBlanca Art House', 'https://www.casablanca-badsoden.de', 'https://www.casablanca-badsoden.de/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.8f66ede0.png&w=256&q=75'),
            new CinemaDto(CinemaIdEnum::DE_CINETECH, $country, 'Cinetech', 'https://cinetech.de', 'https://www.cinetech.de/_next/image?url=%2Fmove-to-cdn%2Fimages%2Fcinetech-logo.png&w=1080&q=75'),
            new CinemaDto(CinemaIdEnum::DE_CINEMOON, $country, 'Cinemoon', 'https://www.cinemoon.de', 'https://cineamo-cdn.b-cdn.net/cinema-logo-wide-image/b1000818-da2e-4413-9929-e905a4b9882e?width=640&optimizer=image'),
            new CinemaDto(CinemaIdEnum::DE_SCALA_TUTTLINGEN, $country, 'Scala Tuttlingen', 'https://www.scala-tuttlingen.de', 'https://scala-tuttlingen.de/App/Assets/ci/kinotainment-tuttlingen/img/logo_weiss_transparent.png'),
            new CinemaDto(CinemaIdEnum::DE_ZINEMA_CITY, $country, 'Zinema City', 'https://zinema-city.de', 'https://cdn.cineweb.de/media/kinobilder/654/fot7SnqESCphOQQcZv45Qks9Gl9nBmpxBFLEVPPZ.png'),
            new CinemaDto(CinemaIdEnum::DE_APOLLO_CINEMAS, $country, 'Apollo Cinemas', 'https://apollo.ge-kinos.de', 'https://cdn.cineweb.de/media/kinobilder/668/GsmEdqr7jBM6BRZh9aFtFII60LipH6da6LU5fC8C.png'),
            new CinemaDto(CinemaIdEnum::DE_KINOCENTER_BORKEN, $country, 'Kinocenter Borken', 'https://www.kinocenterborken.de', 'https://www.kinocenterborken.de/clients/46/img/logo_shop_pdf.png'),
            new CinemaDto(CinemaIdEnum::DE_CINECITTA, $country, 'Cinecitta', 'https://www.cinecitta.de', 'https://static.cinecitta.de/portal/skins/cine_corvus/pics/theater/cinecitta.svg'),
            new CinemaDto(CinemaIdEnum::DE_CINEDOM, $country, 'Cinedom', 'https://cinedom.de', 'https://cinedom.de/wp-content/uploads/sites/2/2022/03/CINE_Logo_pos_Claim_RGB_RZ-1024x439-2.png'),
            new CinemaDto(CinemaIdEnum::DE_KINOWELT, $country, 'Kinowelt', 'https://www.kinowelt-sylt.de', 'https://www.kinowelt-sylt.de/wp-content/uploads/2015/07/cropped-cropped-kwwl_2015-2.png'),
            new CinemaDto(CinemaIdEnum::DE_KLEVERKINOS, $country, 'Kleverkinos', 'https://www.kleverkinos.de', 'https://www.kleverkinos.de/clients/495/img/logo.png'),
            new CinemaDto(CinemaIdEnum::DE_JAC_KINO, $country, 'Jac Kino', 'https://www.jac-kino.de', 'https://www.jac-kino.de/clients/446/img/logo.png'),
            new CinemaDto(CinemaIdEnum::DE_LUNA, $country, 'Luna', 'https://www.lunafilmtheater.de', 'https://www.lunafilmtheater.de/bilder_web/LunaBanner.jpg'),
            new CinemaDto(CinemaIdEnum::DE_UCI_MULTIPLEX, $country, 'UCI Multiplex', 'https://www.uci-kinowelt.de', 'https://www.uci-kinowelt.de/css/images/design/uci-logo.png'),
            new CinemaDto(CinemaIdEnum::DE_KINODROM, $country, 'Kinodrom', 'https://www.kinodrom.de', 'https://www.kinodrom.de/clients/44/img/logo.png'),
            new CinemaDto(CinemaIdEnum::DE_CINEMAXX_VUE, $country, 'Cinemaxx Vue', 'https://www.cinemaxx.de', 'https://www.cinemaxx.de/assets/css/images/logo-cinemaxx.svg'),
            new CinemaDto(CinemaIdEnum::DE_KINOPOLIS, $country, 'Kinopolis', 'https://www.kinopolis.de', 'https://trailer.kinopolis.de/media/img/logos/kinopolis.png?20251011'),
            new CinemaDto(CinemaIdEnum::DE_CINEPLEX, $country, 'Cineplex ', 'https://www.cineplex.de', 'https://www.cineplex.de/static/images/cp_logo_stadtauswahl.svg'),
            new CinemaDto(CinemaIdEnum::DE_CINESTAR, $country, 'Cinestar', 'https://www.cinestar.de', 'https://www.cinestar.de/bundles/website/images/layout/logo.png'),
        ];
    }
}