<?php

namespace CinemaPack\Mapper;

use CinemaPack\Contracts\CinemaUrlMapperInterface;
use CinemaPack\Enum\CinemaIdEnum;

class CinemaUrlMapper implements CinemaUrlMapperInterface
{
    public function mapIdToUrl(CinemaIdEnum $id): ?string
    {
        return match ($id) {
            // Sweden
            CinemaIdEnum::SE_FILMSTADEN => 'https://www.filmstaden.se',

            // Norway
            CinemaIdEnum::NO_GRIMSTAD_KULTURHUS => 'https://www.grimstadkulturhus.no',
            CinemaIdEnum::NO_RAKKESTAD_KULTURHUS => 'https://rakkestadkulturhus.no',
            CinemaIdEnum::NO_AL_KULTURHUS => 'https://aal.kulturhus.no',
            CinemaIdEnum::NO_GJOVIK_CINEMA => 'https://gjovikkinoogscene.no',
            CinemaIdEnum::NO_HITRA_KINO => 'https://www.filmweb.no',
            CinemaIdEnum::NO_NES_KULTURHUS => 'https://www.neskulturhus.no',
            CinemaIdEnum::NO_HAMAR_KINO => 'https://www.hamarkino.no',
            CinemaIdEnum::NO_LILLEHAMMER_KINO => 'https://www.lillehammerkino.no',
            CinemaIdEnum::NO_HURTIGRUTENS_HUS => 'https://www.hurtigrutenshus.no',
            CinemaIdEnum::NO_TRONDHEIM_KINO => 'https://www.trondheimkino.no',
            CinemaIdEnum::NO_NORDISK_FILM => 'https://www.nfkino.no',
            CinemaIdEnum::NO_TYSVERTUNET_KULTURHUS => 'https://www.tysvertunet.kulturhus.no',
            CinemaIdEnum::NO_STOREN => 'https://www.storenkulturhus.no',
            CinemaIdEnum::NO_HJERTES_KULTURHUS => 'https://www.hjertnes.no',
            CinemaIdEnum::NO_FELIX => 'https://ebillett.no',
            CinemaIdEnum::NO_FREDIKSTAD_KINO => 'https://www.fredrikstadkino.no',
            CinemaIdEnum::NO_CINEMATEKET_BERGEN => 'https://cinemateketbergen.ticketco.events',
            CinemaIdEnum::NO_ODEON => 'https://www.odeonkino.no/',

            // Netherlands
            CinemaIdEnum::NL_C_CINEMA => 'https://www.c-cinema.nl',
            CinemaIdEnum::NL_KOK_CINEMAXX => 'https://www.kokcinemaxx.nl',
            CinemaIdEnum::NL_DAVINCI_GOES => 'https://bioscoopgoes.nl',
            CinemaIdEnum::NL_CINECITY => 'https://www.cinecity.nl',
            CinemaIdEnum::NL_PATHE => 'https://pathe.nl',
            CinemaIdEnum::NL_VUE => 'https://www.vuecinemas.nl',
            CinemaIdEnum::NL_KINEPOLIS => 'https://kinepolis.nl',

            // Luxembourg
            CinemaIdEnum::LU_KINEPOLIS => 'https://kinepolis.lu',

            // Ireland
            CinemaIdEnum::IE_IMC => 'https://www.imccinemas.ie',
            CinemaIdEnum::IE_GATE_CINEMA => 'https://gatecinemas.com',
            CinemaIdEnum::IE_ARC_CINEMA => 'https://arccinema.ie',
            CinemaIdEnum::IE_THE_W_CINEMA => 'https://www.thewcinema.com',
            CinemaIdEnum::IE_REGAL => 'https://regalcinema.ie',
            CinemaIdEnum::IE_MAYO_MOVIE_WORLD => 'https://www.mayomovieworld.ie',
            CinemaIdEnum::IE_CINEWORLD => 'https://www.cineworld.ie',
            CinemaIdEnum::IE_VUE => 'https://www.myvue.com',
            CinemaIdEnum::IE_CENTURY_CINEMA => 'https://centurycinemas.ie',
            CinemaIdEnum::IE_THE_REEL_PICTURES => 'https://www.thereelpicture.com',
            CinemaIdEnum::IE_OMNIPLEX => 'https://www.omniplex.ie',
            CinemaIdEnum::IE_CINEMA_KILLARNEY => 'https://cinemakillarney.admit-one.eu',
            CinemaIdEnum::IE_ODEON => 'https://www.odeoncinemas.ie',
            CinemaIdEnum::IE_EYE_CINEMA => 'https://www.eyecinema.ie',

            // Iceland
            CinemaIdEnum::IS_BIO_PARADIS => 'https://bioparadis.is',

            // Germany
            CinemaIdEnum::DE_SOEST_UNIVERSUM => 'https://universum-soest.com',
            CinemaIdEnum::DE_KINOPLAST => 'https://kino-weil.de',
            CinemaIdEnum::DE_FILMFORUM => 'https://filmforum-schwedt.de',
            CinemaIdEnum::DE_KINO_BOIZENBURG => 'https://www.kino-boizenburg.de',
            CinemaIdEnum::DE_KINORAMA_UNNA => 'https://www.kino-unna.de',
            CinemaIdEnum::DE_CAPITOL_LITTLE => 'https://capitol-kornwestheim.de',
            CinemaIdEnum::DE_KINO_ZEIT => 'https://www.kino-zeit.de',
            CinemaIdEnum::DE_CASABLANCA_ART => 'https://www.casablanca-badsoden.de',
            CinemaIdEnum::DE_CINETECH => 'https://cinetech.de',
            CinemaIdEnum::DE_CINEMOON => 'https://www.cinemoon.de',
            CinemaIdEnum::DE_SCALA_TUTTLINGEN => 'https://www.scala-tuttlingen.de',
            CinemaIdEnum::DE_ZINEMA_CITY => 'https://zinema-city.de',
            CinemaIdEnum::DE_APOLLO_CINEMAS => 'https://apollo.ge-kinos.de',
            CinemaIdEnum::DE_KINOCENTER_BORKEN => 'https://www.kinocenterborken.de',
            CinemaIdEnum::DE_CINECITTA => 'https://www.cinecitta.de',
            CinemaIdEnum::DE_CINEDOM => 'https://cinedom.de',
            CinemaIdEnum::DE_KINOWELT => 'https://www.kinowelt-sylt.de',
            CinemaIdEnum::DE_KLEVERKINOS => 'https://www.kleverkinos.de',
            CinemaIdEnum::DE_JAC_KINO => 'https://www.jac-kino.de',
            CinemaIdEnum::DE_LUNA => 'https://www.lunafilmtheater.de',
            CinemaIdEnum::DE_UCI_MULTIPLEX => 'https://www.uci-kinowelt.de',
            CinemaIdEnum::DE_KINODROM => 'https://www.kinodrom.de',
            CinemaIdEnum::DE_CINEMAXX_VUE => 'https://www.cinemaxx.de',
            CinemaIdEnum::DE_KINOPOLIS => 'https://www.kinopolis.de',
            CinemaIdEnum::DE_CINEPLEX => 'https://www.cineplex.de',
            CinemaIdEnum::DE_CINESTAR => 'https://www.cinestar.de',

            // Denmark
            CinemaIdEnum::DK_VUE => 'https://www.biografenvue.dk/',

            // Belgium
            CinemaIdEnum::BE_PATHE => 'https://www.pathe.be',
            CinemaIdEnum::BE_KINEPOLIS => 'https://kinepolis.be',

            // United Kingdom
            CinemaIdEnum::UK_BACKLOT => 'https://www.thebacklotcinema.co.uk',
            CinemaIdEnum::UK_ARC => 'https://arccinema.co.uk',
            CinemaIdEnum::UK_THROWLEY_YARD => 'https://www.throwleyyardcinema.co.uk',
            CinemaIdEnum::UK_EARLING_PROJECT => 'https://www.ealingproject.co.uk',
            CinemaIdEnum::UK_OMNIPLEX => 'https://www.omniplex.ie',
            CinemaIdEnum::UK_WATERMANS => 'https://www.watermans.org.uk',
            CinemaIdEnum::UK_HIGHLIAND => 'https://highlandcinema.co.uk',
            CinemaIdEnum::UK_THE_LIGHT => 'https://lightcinemas.co.uk',
            CinemaIdEnum::UK_ODEON => 'https://www.odeon.co.uk',
            CinemaIdEnum::UK_PERTH_PLAYHOUSE => 'https://www.theperthplayhouse.co.uk',
            CinemaIdEnum::UK_SAVOY => 'https://www.savoyonline.co.uk',
            CinemaIdEnum::UK_VUE => 'https://www.myvue.com',
            CinemaIdEnum::UK_SHOWCASE => 'https://www.showcasecinemas.co.uk',
            CinemaIdEnum::UK_CINEWORLD => 'https://www.cineworld.co.uk',
        };
    }
}