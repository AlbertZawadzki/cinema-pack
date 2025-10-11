<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaNorwayProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::NO);

        return [
            new CinemaDto(CinemaIdEnum::NO_GRIMSTAD_KULTURHUS, $country, 'Grimstad kulturhus', 'https://www.grimstadkulturhus.no', 'https://cdn.sanity.io/images/yegufmtz/production/0e14f4542229c03de7b21ebf44347d1d6555d059-308x96.svg?auto=format'),
            new CinemaDto(CinemaIdEnum::NO_RAKKESTAD_KULTURHUS, $country, 'Rakkestad Kulturhus', 'https://rakkestadkulturhus.no', 'https://dx-cw-static-files.imgix.net/220/rakkestad-kulturhus-logo.png'),
            new CinemaDto(CinemaIdEnum::NO_AL_KULTURHUS, $country, 'Al Kulturhus', 'https://aal.kulturhus.no', 'https://dx-cw-static-files.imgix.net/308/logo.png?fit=clamp&w=350'),
            new CinemaDto(CinemaIdEnum::NO_GJOVIK_CINEMA, $country, 'Gjøvik Cinema', 'https://gjovikkinoogscene.no', 'https://dx-cw-static-files.imgix.net/116/logo-hjemmeside.png'),
            new CinemaDto(CinemaIdEnum::NO_HITRA_KINO, $country, 'Hitra Kino', 'https://www.filmweb.no', null),
            new CinemaDto(CinemaIdEnum::NO_NES_KULTURHUS, $country, 'Nes Kulturhus', 'https://www.neskulturhus.no', 'https://www.neskulturhus.no/images/logo_kun_ikon.png'),
            new CinemaDto(CinemaIdEnum::NO_HAMAR_KINO, $country, 'Hamar Kino', 'https://www.hamarkino.no', 'https://cdn.sanity.io/images/oe2lgelz/production/49c043bd3fab2ad49ad805a0275e986d2f673465-504x53.svg?auto=format'),
            new CinemaDto(CinemaIdEnum::NO_LILLEHAMMER_KINO, $country, 'Lillehammer Kino', 'https://www.lillehammerkino.no', 'https://cdn.sanity.io/images/03g3aeug/production/d46bfd767f0ced82d77a5b256b00fe102c105253-286x111.svg?auto=format'),
            new CinemaDto(CinemaIdEnum::NO_HURTIGRUTENS_HUS, $country, 'Hurtig Rutens Hus', 'https://www.hurtigrutenshus.no', 'https://dx-cw-static-files.imgix.net/108/hurtigrutenshuslogomedbat-white.png'),
            new CinemaDto(CinemaIdEnum::NO_TRONDHEIM_KINO, $country, 'Trondheim Kino', 'https://www.trondheimkino.no', 'https://images.filmgrail.com/Trondheim%20logo%20wide%20neg.png?q=100'),
            new CinemaDto(CinemaIdEnum::NO_NORDISK_FILM, $country, 'Nordisk Film Kino', 'https://www.nfkino.no', 'https://www.nfkino.no/themes/custom/nfbionosub/logo.svg'),
            new CinemaDto(CinemaIdEnum::NO_TYSVERTUNET_KULTURHUS, $country, 'Tysvertunet Kulturhus', 'https://www.tysvertunet.kulturhus.no', 'https://dx-cw-static-files.imgix.net/122/tysvertunet-logo-hvit.png'),
            new CinemaDto(CinemaIdEnum::NO_STOREN, $country, 'Storen', 'https://www.storenkulturhus.no', 'https://dx-cw-static-files.imgix.net/184/sk-logo-full-1000px.svg'),
            new CinemaDto(CinemaIdEnum::NO_HJERTES_KULTURHUS, $country, 'Hjertes kulturhus', 'https://www.hjertnes.no', null),
            new CinemaDto(CinemaIdEnum::NO_FELIX, $country, 'Felix', 'https://ebillett.no', 'https://ebillett.no/images/ebillett-logo.svg'),
            new CinemaDto(CinemaIdEnum::NO_FREDIKSTAD_KINO, $country, 'Fredikstad kino', 'https://www.fredrikstadkino.no', 'https://dx-cw-static-files.imgix.net/178/fredrikstad-kino-hvit-web.png'),
            new CinemaDto(CinemaIdEnum::NO_CINEMATEKET_BERGEN, $country, 'Cinemateket i bergen', 'https://cinemateketbergen.ticketco.events', 'https://tuploads.s3.eu-west-1.amazonaws.com/production/uploads/branding/header_logo_image/36532/Logo-Cinemateket-hvit-transp_png.png'),
            new CinemaDto(CinemaIdEnum::NO_ODEON, $country, 'Odeon', 'https://www.odeonkino.no/', 'https://images.ctfassets.net/uplbey57gb23/18rO8qIY7AxMorCDuyO3Kr/4c03c6b6c39656cbb7b081025a863f7d/odeonlogo.png?h=32&q=70'),
        ];
    }
}