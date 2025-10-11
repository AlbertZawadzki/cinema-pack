<?php

namespace CinemaPack\Mapper;

use CinemaPack\Contracts\CinemaImageMapperInterface;
use CinemaPack\Enum\CinemaIdEnum;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CinemaImageMapper implements CinemaImageMapperInterface
{
    public function mapIdToImageUrl(CinemaIdEnum $id): UploadedFile
    {
        $fileName = match ($id) {
            // Sweden
            CinemaIdEnum::SE_FILMSTADEN => 'filmstaden.png',

            // Norway
            CinemaIdEnum::NO_GRIMSTAD_KULTURHUS => 'grimstad-kulturhus.png',
            CinemaIdEnum::NO_RAKKESTAD_KULTURHUS => 'rakkestad-kulturhus.png',
            CinemaIdEnum::NO_AL_KULTURHUS => 'al-kulturhus.png',
            CinemaIdEnum::NO_GJOVIK_CINEMA => 'gjovik-kino-scene.png',
            CinemaIdEnum::NO_HITRA_KINO => 'hitra-kino.png',
            CinemaIdEnum::NO_NES_KULTURHUS => 'nes-kulturhus.png',
            CinemaIdEnum::NO_HAMAR_KINO => 'hamar-kino.png',
            CinemaIdEnum::NO_LILLEHAMMER_KINO => 'lilehammer-kino.png',
            CinemaIdEnum::NO_HURTIGRUTENS_HUS => 'hurtig-rutens-hus.png',
            CinemaIdEnum::NO_TRONDHEIM_KINO => 'trondheim-kino.png',
            CinemaIdEnum::NO_NORDISK_FILM => 'nordisk-film-kino.png',
            CinemaIdEnum::NO_TYSVERTUNET_KULTURHUS => 'tysvertunet-kulturhus.png',
            CinemaIdEnum::NO_STOREN => 'storen.png',
            CinemaIdEnum::NO_HJERTNES_KULTURHUS => 'hjertnes-kulturhus.png',
            CinemaIdEnum::NO_FELIX => 'felix.png',
            CinemaIdEnum::NO_FREDIKSTAD_KINO => 'fredrikstad-kino.png',
            CinemaIdEnum::NO_CINEMATEKET_BERGEN => 'cinemateket-bergen.png',
            CinemaIdEnum::NO_ODEON => 'odeon.png',

            // Netherlands
            CinemaIdEnum::NL_C_CINEMA => 'c-cinema.png',
            CinemaIdEnum::NL_KOK_CINEMAXX => 'kok-cinemax.png',
            CinemaIdEnum::NL_DAVINCI_GOES => 'davinci-bioscoop-goes.png',
            CinemaIdEnum::NL_CINECITY => 'cinecity.png',
            CinemaIdEnum::NL_PATHE => 'pathe.png',
            CinemaIdEnum::NL_VUE => 'vue.png',
            CinemaIdEnum::NL_KINEPOLIS => 'kinepolis.png',

            // Luxembourg
            CinemaIdEnum::LU_KINEPOLIS => 'kinepolis.png',

            // Ireland
            CinemaIdEnum::IE_IMC => 'imc.png',
            CinemaIdEnum::IE_GATE_CINEMA => 'gate-cinema.png',
            CinemaIdEnum::IE_ARC_CINEMA => 'the-arc-cinema.png',
            CinemaIdEnum::IE_THE_W_CINEMA => 'the-w-cinema.png',
            CinemaIdEnum::IE_REGAL => 'regal-cinema.png',
            CinemaIdEnum::IE_MAYO_MOVIE_WORLD => 'mayo-movie-world.png',
            CinemaIdEnum::IE_CINEWORLD => 'cineworld.png',
            CinemaIdEnum::IE_VUE => 'vue.png',
            CinemaIdEnum::IE_CENTURY_CINEMA => 'century-cinemas.png',
            CinemaIdEnum::IE_THE_REEL_PICTURES => 'the-reel-picture.png',
            CinemaIdEnum::IE_OMNIPLEX => 'omniplex.png',
            CinemaIdEnum::IE_CINEMA_KILLARNEY => 'cinema-killarney.png',
            CinemaIdEnum::IE_ODEON => 'odeon.png',
            CinemaIdEnum::IE_EYE_CINEMA => 'eye-cinema.png',

            // Iceland
            CinemaIdEnum::IS_BIO_PARADIS => 'bio-paradis.png',

            // Germany
            CinemaIdEnum::DE_SOEST_UNIVERSUM => 'soest-universum.png',
            CinemaIdEnum::DE_KINOPALAST => 'kinopalast.png',
            CinemaIdEnum::DE_FILMFORUM => 'filmforum.png',
            CinemaIdEnum::DE_KINO_BOIZENBURG => 'kino-boizenburg.png',
            CinemaIdEnum::DE_KINORAMA_UNNA => 'kinorama-unna.png',
            CinemaIdEnum::DE_CAPITOL_LITTLE => 'capitol-little-red.png',
            CinemaIdEnum::DE_KINO_ZEIT => 'kino-zeit.png',
            CinemaIdEnum::DE_CASABLANCA_ART => 'casablanca-art-house.png',
            CinemaIdEnum::DE_CINETECH => 'cinetech.png',
            CinemaIdEnum::DE_CINEMOON => 'cinemoon.png',
            CinemaIdEnum::DE_SCALA_TUTTLINGEN => 'scala-tuttlingen.png',
            CinemaIdEnum::DE_ZINEMA_CITY => 'zinema-city.png',
            CinemaIdEnum::DE_APOLLO_CINEMAS => 'apollo-cinemas.png',
            CinemaIdEnum::DE_KINOCENTER_BORKEN => 'kinocenter-borken.png',
            CinemaIdEnum::DE_CINECITTA => 'cinecitta.png',
            CinemaIdEnum::DE_CINEDOM => 'cinedom.png',
            CinemaIdEnum::DE_KINOWELT => 'kinowelt.png',
            CinemaIdEnum::DE_KLEVERKINOS => 'kleverkinos.png',
            CinemaIdEnum::DE_JAC_KINO => 'jac-kino.png',
            CinemaIdEnum::DE_LUNA => 'luna.png',
            CinemaIdEnum::DE_UCI_MULTIPLEX => 'uci-multiplex.png',
            CinemaIdEnum::DE_KINODROM => 'kinodrom-multiplex.png',
            CinemaIdEnum::DE_CINEMAXX_VUE => 'cinemaxx.png',
            CinemaIdEnum::DE_KINOPOLIS => 'kinopolis.png',
            CinemaIdEnum::DE_CINEPLEX => 'cineplex.png',
            CinemaIdEnum::DE_CINESTAR => 'cinestar.png',

            // Denmark
            CinemaIdEnum::DK_VUE => 'vue.png',

            // Belgium
            CinemaIdEnum::BE_PATHE => 'pathe.png',
            CinemaIdEnum::BE_KINEPOLIS => 'kinepolis.png',

            // United Kingdom
            CinemaIdEnum::GB_BACKLOT => 'the-backlot.png',
            CinemaIdEnum::GB_ARC => 'the-arc-cinema.png',
            CinemaIdEnum::GB_THROWLEY_YARD => 'throwley-yard.png',
            CinemaIdEnum::GB_EARLING_PROJECT => 'ealing-project.png',
            CinemaIdEnum::GB_OMNIPLEX => 'omniplex.png',
            CinemaIdEnum::GB_WATERMANS => 'watermans.png',
            CinemaIdEnum::GB_HIGHLIAND => 'highland.png',
            CinemaIdEnum::GB_THE_LIGHT => 'the-light.png',
            CinemaIdEnum::GB_ODEON => 'odeon.png',
            CinemaIdEnum::GB_PERTH_PLAYHOUSE => 'the-perth-playhouse.png',
            CinemaIdEnum::GB_SAVOY => 'savoy.png',
            CinemaIdEnum::GB_VUE => 'vue.png',
            CinemaIdEnum::GB_SHOWCASE => 'showcase.png',
            CinemaIdEnum::GB_CINEWORLD => 'cineworld.png',
        };

        $filePath = __DIR__ . '/../Resources/public/images/' . $fileName;

        return new UploadedFile($filePath, $fileName);
    }
}