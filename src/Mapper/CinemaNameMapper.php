<?php

namespace CinemaPack\Mapper;

use CinemaPack\Contracts\CinemaNameMapperInterface;
use CinemaPack\Enum\CinemaIdEnum;

class CinemaNameMapper implements CinemaNameMapperInterface
{
    public function mapIdToName(CinemaIdEnum $id): string
    {
        return match ($id) {
            // Sweden
            CinemaIdEnum::SE_FILMSTADEN => 'Filmstaden',

            // France
            CinemaIdEnum::FR_LA_FILMOTHEQUE_DU_QUARTIER_LATIN => 'La Filmotheque du Quartier Latin',

            // Norway
            CinemaIdEnum::NO_GRIMSTAD_KULTURHUS => 'Grimstad kulturhus',
            CinemaIdEnum::NO_RAKKESTAD_KULTURHUS => 'Rakkestad Kulturhus',
            CinemaIdEnum::NO_AL_KULTURHUS => 'Al Kulturhus',
            CinemaIdEnum::NO_GJOVIK_CINEMA => 'Gjøvik Cinema',
            CinemaIdEnum::NO_HITRA_KINO => 'Hitra Kino',
            CinemaIdEnum::NO_NES_KULTURHUS => 'Nes Kulturhus',
            CinemaIdEnum::NO_HAMAR_KINO => 'Hamar Kino',
            CinemaIdEnum::NO_LILLEHAMMER_KINO => 'Lillehammer Kino',
            CinemaIdEnum::NO_HURTIGRUTENS_HUS => 'Hurtig Rutens Hus',
            CinemaIdEnum::NO_TRONDHEIM_KINO => 'Trondheim Kino',
            CinemaIdEnum::NO_NORDISK_FILM => 'Nordisk Film Kino',
            CinemaIdEnum::NO_TYSVERTUNET_KULTURHUS => 'Tysvertunet Kulturhus',
            CinemaIdEnum::NO_STOREN => 'Storen',
            CinemaIdEnum::NO_HJERTNES_KULTURHUS => 'Hjertnes kulturhus',
            CinemaIdEnum::NO_FELIX => 'Felix',
            CinemaIdEnum::NO_FREDIKSTAD_KINO => 'Fredikstad kino',
            CinemaIdEnum::NO_CINEMATEKET_BERGEN => 'Cinemateket bergen',
            CinemaIdEnum::NO_ODEON => 'Odeon',

            // Netherlands
            CinemaIdEnum::NL_C_CINEMA => 'C Cinema',
            CinemaIdEnum::NL_KOK_CINEMAXX => 'KOK Cinemaxx',
            CinemaIdEnum::NL_DAVINCI_GOES => 'Davinci Goes',
            CinemaIdEnum::NL_CINECITY => 'CineCity',
            CinemaIdEnum::NL_PATHE => 'Pathe',
            CinemaIdEnum::NL_VUE => 'VUE',
            CinemaIdEnum::NL_KINEPOLIS => 'Kinepolis',
            CinemaIdEnum::NL_CITYCINEMA => 'CityCinema',
            CinemaIdEnum::NL_GOTCHA => 'Gotcha!',
            CinemaIdEnum::NL_DOK6 => 'DOK6 Cinema',

            // Luxembourg
            CinemaIdEnum::LU_KINEPOLIS => 'Kinepolis',

            // Ireland
            CinemaIdEnum::IE_BRIERY_GAP => 'Briery Gap',
            CinemaIdEnum::IE_IMC => 'IMC cinemas',
            CinemaIdEnum::IE_GATE_CINEMA => 'Gate Cinema',
            CinemaIdEnum::IE_ARC_CINEMA => 'The Arc Cinema',
            CinemaIdEnum::IE_THE_W_CINEMA => 'The W Cinema',
            CinemaIdEnum::IE_REGAL => 'Regal Cinema',
            CinemaIdEnum::IE_MAYO_MOVIE_WORLD => 'MAYO MOVIE WORLD',
            CinemaIdEnum::IE_CINEWORLD => 'Cineworld',
            CinemaIdEnum::IE_VUE => 'Vue',
            CinemaIdEnum::IE_CENTURY_CINEMA => 'Century Cinemas',
            CinemaIdEnum::IE_THE_REEL_PICTURES => 'The Reel Pictures',
            CinemaIdEnum::IE_OMNIPLEX => 'Omniplex',
            CinemaIdEnum::IE_CINEMA_KILLARNEY => 'Cinema killarney',
            CinemaIdEnum::IE_ODEON => 'Odeon',
            CinemaIdEnum::IE_EYE_CINEMA => 'Eye cinema',

            // Iceland
            CinemaIdEnum::IS_BIO_PARADIS => 'Bio paradis',

            // Germany
            CinemaIdEnum::DE_SOEST_UNIVERSUM => 'Soest Universum',
            CinemaIdEnum::DE_KINOPALAST => 'Kinopalast',
            CinemaIdEnum::DE_FILMFORUM => 'FilmforUM',
            CinemaIdEnum::DE_KINO_BOIZENBURG => 'Kino Boizenburg',
            CinemaIdEnum::DE_KINORAMA_UNNA => 'Kinorama Unna',
            CinemaIdEnum::DE_CAPITOL_LITTLE => 'Capitol Little Red',
            CinemaIdEnum::DE_KINO_ZEIT => 'Kino Zeit',
            CinemaIdEnum::DE_CASABLANCA_ART => 'CasaBlanca Art House',
            CinemaIdEnum::DE_CINETECH => 'Cinetech',
            CinemaIdEnum::DE_CINEMOON => 'Cinemoon',
            CinemaIdEnum::DE_SCALA_TUTTLINGEN => 'Scala Tuttlingen',
            CinemaIdEnum::DE_ZINEMA_CITY => 'Zinema City',
            CinemaIdEnum::DE_APOLLO_CINEMAS => 'Apollo Cinemas',
            CinemaIdEnum::DE_KINOCENTER_BORKEN => 'Kinocenter Borken',
            CinemaIdEnum::DE_CINECITTA => 'Cinecitta',
            CinemaIdEnum::DE_CINEDOM => 'Cinedom',
            CinemaIdEnum::DE_KINOWELT => 'Kinowelt',
            CinemaIdEnum::DE_KLEVERKINOS => 'Kleverkinos',
            CinemaIdEnum::DE_JAC_KINO => 'Jac Kino',
            CinemaIdEnum::DE_LUNA => 'Luna',
            CinemaIdEnum::DE_UCI_MULTIPLEX => 'UCI Multiplex',
            CinemaIdEnum::DE_KINODROM => 'Kinodrom',
            CinemaIdEnum::DE_CINEMAXX_VUE => 'Cinemaxx Vue',
            CinemaIdEnum::DE_KINOPOLIS => 'Kinopolis',
            CinemaIdEnum::DE_CINEPLEX => 'Cineplex',
            CinemaIdEnum::DE_CINESTAR => 'Cinestar',

            // Denmark
            CinemaIdEnum::DK_VUE => 'Vue',

            // Belgium
            CinemaIdEnum::BE_PATHE => 'Pathe Belgique',
            CinemaIdEnum::BE_KINEPOLIS => 'Kinepolis',

            // United Kingdom
            CinemaIdEnum::GB_BACKLOT => 'The Backlot Cinema',
            CinemaIdEnum::GB_ARC => 'The Arc UK',
            CinemaIdEnum::GB_THROWLEY_YARD => 'Throwley Yard Cinema',
            CinemaIdEnum::GB_EARLING_PROJECT => 'Ealing Project',
            CinemaIdEnum::GB_OMNIPLEX => 'Omniplex UK',
            CinemaIdEnum::GB_WATERMANS => 'Watermans Arts Centre',
            CinemaIdEnum::GB_HIGHLIAND => 'Highland Cinema',
            CinemaIdEnum::GB_THE_LIGHT => 'The Light',
            CinemaIdEnum::GB_ODEON => 'Odeon',
            CinemaIdEnum::GB_PERTH_PLAYHOUSE => 'The perth playhouse',
            CinemaIdEnum::GB_SAVOY => 'Savoy cinemas',
            CinemaIdEnum::GB_VUE => 'Vue',
            CinemaIdEnum::GB_SHOWCASE => 'Showcase',
            CinemaIdEnum::GB_CINEWORLD => 'Cineworld',

            // Poland
            CinemaIdEnum::PL_NOVEKINO => 'Novekino',
            CinemaIdEnum::PL_KINO_STYLOWY => 'Kino Stylowy',
            CinemaIdEnum::PL_KINO_SOKOL => 'Kino Sokół',
            CinemaIdEnum::PL_KINO_KIJOW => 'Kino Kijów',
            CinemaIdEnum::PL_KINO_ZORZA => 'Kino Zorza',
            CinemaIdEnum::PL_KINO_BAJKA => 'Kino Bajka',
            CinemaIdEnum::PL_CINEMA_LUMIERE => 'Cinema Lumiere',
            CinemaIdEnum::PL_KINO_STUDYJNE_AWANGARDA => 'Kino Studyjne Awangarda',
            CinemaIdEnum::PL_KINO_JANTAR => 'Kino Jantar',
            CinemaIdEnum::PL_KINO_TON => 'Kino TON',
            CinemaIdEnum::PL_KINO_WIELICKA_MEDIATEKA => 'Kino Wielicka Mediateka',
            CinemaIdEnum::PL_KINO_MALTA => 'Kino Malta',
            CinemaIdEnum::PL_KINO_MILLENNIUM => 'Kino Millennium',
            CinemaIdEnum::PL_KINO_CENTRUM => 'Kino Centrum',
            CinemaIdEnum::PL_KINO_MOK => 'Kino MOK',
            CinemaIdEnum::PL_KINO_WCK => 'Kino WCK',
            CinemaIdEnum::PL_KINO_NARIE => 'Kino Narie',
            CinemaIdEnum::PL_PYRZYCKI_DOM_KULTURY => 'Pyrzycki Dom Kultury',
            CinemaIdEnum::PL_KINO_WYBRZEZE => 'Kino Wybrzeże',
            CinemaIdEnum::PL_KINO_OPOLANKA => 'Kino Opolanka',
            CinemaIdEnum::PL_KINO_CISY => 'Kino Cisy',
            CinemaIdEnum::PL_KINO_JUTRZENKA => 'Kino Jutrzenka',
            CinemaIdEnum::PL_KINO_ZBYSZEK => 'Kino Zbyszek',
            CinemaIdEnum::PL_KINO_MOSKWA => 'Kino Moskwa',
            CinemaIdEnum::PL_KINO_KOLORY => 'Kino Kolory',
            CinemaIdEnum::PL_KINO_LUBON => 'Kino Luboń',
            CinemaIdEnum::PL_KINO_BAJKA_KLUCZBORK => 'Kino Bajka Kluczbork',
            CinemaIdEnum::PL_KINO_SNIEZKA => 'Kino Śnieżka',
            CinemaIdEnum::PL_MCK_LEZAJSK => 'MCK Leżajsk',
            CinemaIdEnum::PL_CINEMA_CITY => 'Cinema City',
            CinemaIdEnum::PL_KINO_TOMI => 'Kino TOMI',
            CinemaIdEnum::PL_KINO_DIANA => 'Kino Diana',
            CinemaIdEnum::PL_KINO_PATRIA => 'Kino Patria',
            CinemaIdEnum::PL_KINO_ZACISZE => 'Kino Zacisze',
        };
    }
}