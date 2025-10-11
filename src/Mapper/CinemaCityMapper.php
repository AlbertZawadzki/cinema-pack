<?php

namespace CinemaPack\Mapper;

use CinemaPack\Contracts\CinemaCityMapperInterface;
use CinemaPack\Enum\CinemaIdEnum;

class CinemaCityMapper implements CinemaCityMapperInterface
{
    public function mapIdToCities(CinemaIdEnum $id): array
    {
        return match ($id) {
            // Sweden
            CinemaIdEnum::SE_FILMSTADEN => ['Stockholm', 'Gothenburg', 'Malmö', 'Uppsala'],

            // Norway
            CinemaIdEnum::NO_GRIMSTAD_KULTURHUS => ['Grimstad'],
            CinemaIdEnum::NO_RAKKESTAD_KULTURHUS => ['Rakkestad'],
            CinemaIdEnum::NO_AL_KULTURHUS => ['Ål'],
            CinemaIdEnum::NO_GJOVIK_CINEMA => ['Gjøvik'],
            CinemaIdEnum::NO_HITRA_KINO => ['Fillan'],
            CinemaIdEnum::NO_NES_KULTURHUS => ['Årnes'],
            CinemaIdEnum::NO_HAMAR_KINO => ['Hamar'],
            CinemaIdEnum::NO_LILLEHAMMER_KINO => ['Lillehammer'],
            CinemaIdEnum::NO_HURTIGRUTENS_HUS => ['Stokmarknes'],
            CinemaIdEnum::NO_TRONDHEIM_KINO => ['Trondheim'],
            CinemaIdEnum::NO_NORDISK_FILM => ['Oslo', 'Bergen', 'Stavanger', 'Kristiansand'],
            CinemaIdEnum::NO_TYSVERTUNET_KULTURHUS => ['Aksdal'],
            CinemaIdEnum::NO_STOREN => ['Støren'],
            CinemaIdEnum::NO_HJERTES_KULTURHUS => ['Sandefjord'],
            CinemaIdEnum::NO_FELIX => [],
            CinemaIdEnum::NO_FREDIKSTAD_KINO => ['Fredrikstad'],
            CinemaIdEnum::NO_CINEMATEKET_BERGEN => ['Bergen'],
            CinemaIdEnum::NO_ODEON => ['Oslo', 'Stavanger', 'Skien', 'Sandvika'],

            // Netherlands
            CinemaIdEnum::NL_C_CINEMA => ['Bergen'],
            CinemaIdEnum::NL_KOK_CINEMAXX => ['Harderwijk', 'Lelystad'],
            CinemaIdEnum::NL_DAVINCI_GOES => ['Goes'],
            CinemaIdEnum::NL_CINECITY => ['Vlissingen', 'Terneuzen'],
            CinemaIdEnum::NL_PATHE => ['Amsterdam', 'Rotterdam', 'The Hague', 'Utrecht', 'Eindhoven'],
            CinemaIdEnum::NL_VUE => ['Amsterdam', 'Eindhoven', 'Hilversum', 'Alkmaar', 'Den Bosch'],
            CinemaIdEnum::NL_KINEPOLIS => ['Utrecht', 'Rotterdam', 'Breda', 'Groningen', 'Enschede'],

            // Luxembourg
            CinemaIdEnum::LU_KINEPOLIS => ['Luxembourg City', 'Belval', 'Esch-sur-Alzette'],

            // Ireland
            CinemaIdEnum::IE_IMC => ['Dublin', 'Galway', 'Cork', 'Dun Laoghaire', 'Santry'],
            CinemaIdEnum::IE_GATE_CINEMA => ['Cork'],
            CinemaIdEnum::IE_ARC_CINEMA => ['Drogheda', 'Wexford', 'Navan'],
            CinemaIdEnum::IE_THE_W_CINEMA => ['Westport'],
            CinemaIdEnum::IE_REGAL => ['Youghal'],
            CinemaIdEnum::IE_MAYO_MOVIE_WORLD => ['Castlebar'],
            CinemaIdEnum::IE_CINEWORLD => ['Dublin'],
            CinemaIdEnum::IE_VUE => ['Dublin'],
            CinemaIdEnum::IE_CENTURY_CINEMA => ['Letterkenny'],
            CinemaIdEnum::IE_THE_REEL_PICTURES => ['Cork', 'Blackpool', 'Ballincollig'],
            CinemaIdEnum::IE_OMNIPLEX => ['Dublin', 'Cork', 'Limerick', 'Galway', 'Tralee'],
            CinemaIdEnum::IE_CINEMA_KILLARNEY => ['Killarney'],
            CinemaIdEnum::IE_ODEON => ['Dublin', 'Limerick', 'Waterford', 'Naas', 'Newbridge'],
            CinemaIdEnum::IE_EYE_CINEMA => ['Galway'],

            // Iceland
            CinemaIdEnum::IS_BIO_PARADIS => ['Reykjavík'],

            // Germany (Expanded Lists)
            CinemaIdEnum::DE_SOEST_UNIVERSUM => ['Soest'],
            CinemaIdEnum::DE_KINOPLAST => ['Weil am Rhein'],
            CinemaIdEnum::DE_FILMFORUM => ['Schwedt'],
            CinemaIdEnum::DE_KINO_BOIZENBURG => ['Boizenburg'],
            CinemaIdEnum::DE_KINORAMA_UNNA => ['Unna'],
            CinemaIdEnum::DE_CAPITOL_LITTLE => ['Kornwestheim'],
            CinemaIdEnum::DE_KINO_ZEIT => [],
            CinemaIdEnum::DE_CASABLANCA_ART => ['Bad Soden'],
            CinemaIdEnum::DE_CINETECH => ['Ahaus', 'Gronau', 'Vreden'],
            CinemaIdEnum::DE_CINEMOON => ['Heilbronn'],
            CinemaIdEnum::DE_SCALA_TUTTLINGEN => ['Tuttlingen'],
            CinemaIdEnum::DE_ZINEMA_CITY => ['Waldkraiburg'],
            CinemaIdEnum::DE_APOLLO_CINEMAS => ['Gelsenkirchen'],
            CinemaIdEnum::DE_KINOCENTER_BORKEN => ['Borken'],
            CinemaIdEnum::DE_CINECITTA => ['Nuremberg'],
            CinemaIdEnum::DE_CINEDOM => ['Cologne'],
            CinemaIdEnum::DE_KINOWELT => ['Sylt'],
            CinemaIdEnum::DE_KLEVERKINOS => ['Kleve'],
            CinemaIdEnum::DE_JAC_KINO => ['Attendorn'],
            CinemaIdEnum::DE_LUNA => ['Ludwigsburg'],
            CinemaIdEnum::DE_KINODROM => ['Bocholt'],
            CinemaIdEnum::DE_UCI_MULTIPLEX => ['Berlin', 'Hamburg', 'Düsseldorf', 'Dresden', 'Bochum', 'Cologne', 'Duisburg', 'Leipzig', 'Potsdam', 'Wilhelmshaven'],
            CinemaIdEnum::DE_CINEMAXX_VUE => ['Hamburg', 'Berlin', 'Munich', 'Essen', 'Stuttgart', 'Bremen', 'Hanover', 'Bielefeld', 'Kiel', 'Freiburg', 'Halle', 'Krefeld'],
            CinemaIdEnum::DE_KINOPOLIS => ['Frankfurt', 'Darmstadt', 'Bonn', 'Munich', 'Karlsruhe', 'Koblenz', 'Leverkusen', 'Rosenheim', 'Landshut'],
            CinemaIdEnum::DE_CINEPLEX => ['Berlin', 'Munich', 'Cologne', 'Nuremberg', 'Münster', 'Aachen', 'Kassel', 'Paderborn', 'Marburg', 'Leipzig', 'Goslar'],
            CinemaIdEnum::DE_CINESTAR => ['Berlin', 'Frankfurt', 'Bremen', 'Leipzig', 'Lübeck', 'Bonn', 'Dortmund', 'Erfurt', 'Fulda', 'Mainz', 'Rostock', 'Saarbrücken'],

            // Denmark
            CinemaIdEnum::DK_VUE => ['Copenhagen', 'Aarhus', 'Odense', 'Aalborg'],

            // Belgium
            CinemaIdEnum::BE_PATHE => ['Brussels', 'Charleroi', 'Liège', 'Verviers'],
            CinemaIdEnum::BE_KINEPOLIS => ['Brussels', 'Antwerp', 'Ghent', 'Liège', 'Bruges'],

            // United Kingdom
            CinemaIdEnum::UK_BACKLOT => ['Blackpool'],
            CinemaIdEnum::UK_ARC => ['Great Yarmouth', 'Daventry', 'Peterhead', 'Beeston'],
            CinemaIdEnum::UK_THROWLEY_YARD => ['Sutton'],
            CinemaIdEnum::UK_EARLING_PROJECT => ['London'],
            CinemaIdEnum::UK_OMNIPLEX => ['Belfast', 'Derry', 'Lisburn', 'Newry', 'Bangor', 'Craigavon'],
            CinemaIdEnum::UK_WATERMANS => ['London'],
            CinemaIdEnum::UK_HIGHLIAND => ['Fort William'],
            CinemaIdEnum::UK_THE_LIGHT => ['Cambridge', 'Sheffield', 'Stockport', 'Bradford', 'Bolton', 'Walsall', 'New Brighton', 'Wisbech', 'Banbury'],
            CinemaIdEnum::UK_ODEON => ['London', 'Manchester', 'Birmingham', 'Glasgow', 'Liverpool', 'Edinburgh', 'Belfast', 'Cardiff', 'Bristol', 'Leeds', 'Sheffield', 'Leicester', 'Brighton', 'Southampton', 'Newcastle upon Tyne'],
            CinemaIdEnum::UK_PERTH_PLAYHOUSE => ['Perth'],
            CinemaIdEnum::UK_SAVOY => ['Nottingham', 'Doncaster', 'Boston', 'Worksop', 'Corby', 'Grantham'],
            CinemaIdEnum::UK_VUE => ['London', 'Manchester', 'Bristol', 'Edinburgh', 'Leeds', 'Cardiff', 'Birmingham', 'Glasgow', 'Sheffield', 'Aberdeen', 'Cambridge', 'Exeter', 'Oxford', 'Portsmouth', 'York'],
            CinemaIdEnum::UK_SHOWCASE => ['London', 'Bristol', 'Glasgow', 'Leicester', 'Reading', 'Leeds', 'Nottingham', 'Derby', 'Peterborough', 'Coventry', 'Cardiff', 'Southampton'],
            CinemaIdEnum::UK_CINEWORLD => ['London', 'Glasgow', 'Birmingham', 'Edinburgh', 'Sheffield', 'Cardiff', 'Manchester', 'Bristol', 'Belfast', 'Aberdeen', 'Nottingham', 'Liverpool', 'Leeds', 'Newcastle upon Tyne'],
        };
    }
}