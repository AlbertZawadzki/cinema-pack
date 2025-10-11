<?php

namespace CinemaPack\Mapper;

use CinemaPack\Contracts\CinemaImageMapperInterface;
use CinemaPack\Enum\CinemaIdEnum;

class CinemaImageMapper implements CinemaImageMapperInterface
{
    public function mapIdToImageUrl(CinemaIdEnum $id): ?string
    {
        return match ($id) {
            // Sweden
            CinemaIdEnum::SE_FILMSTADEN => 'https://images.ctfassets.net/ha69n8ghbltw/2RUuxF1h5556yOB2BV9c97/a1328248232c98c32f011ecf3cd65897/temp_logo_filmstaden.svg?h=32&q=70',

            // Norway
            CinemaIdEnum::NO_GRIMSTAD_KULTURHUS => 'https://cdn.sanity.io/images/yegufmtz/production/0e14f4542229c03de7b21ebf44347d1d6555d059-308x96.svg?auto=format',
            CinemaIdEnum::NO_RAKKESTAD_KULTURHUS => 'https://dx-cw-static-files.imgix.net/220/rakkestad-kulturhus-logo.png',
            CinemaIdEnum::NO_AL_KULTURHUS => 'https://dx-cw-static-files.imgix.net/308/logo.png?fit=clamp&w=350',
            CinemaIdEnum::NO_GJOVIK_CINEMA => 'https://dx-cw-static-files.imgix.net/116/logo-hjemmeside.png',
            CinemaIdEnum::NO_HITRA_KINO => null,
            CinemaIdEnum::NO_NES_KULTURHUS => 'https://www.neskulturhus.no/images/logo_kun_ikon.png',
            CinemaIdEnum::NO_HAMAR_KINO => 'https://cdn.sanity.io/images/oe2lgelz/production/49c043bd3fab2ad49ad805a0275e986d2f673465-504x53.svg?auto=format',
            CinemaIdEnum::NO_LILLEHAMMER_KINO => 'https://cdn.sanity.io/images/03g3aeug/production/d46bfd767f0ced82d77a5b256b00fe102c105253-286x111.svg?auto=format',
            CinemaIdEnum::NO_HURTIGRUTENS_HUS => 'https://dx-cw-static-files.imgix.net/108/hurtigrutenshuslogomedbat-white.png',
            CinemaIdEnum::NO_TRONDHEIM_KINO => 'https://images.filmgrail.com/Trondheim%20logo%20wide%20neg.png?q=100',
            CinemaIdEnum::NO_NORDISK_FILM => 'https://www.nfkino.no/themes/custom/nfbionosub/logo.svg',
            CinemaIdEnum::NO_TYSVERTUNET_KULTURHUS => 'https://dx-cw-static-files.imgix.net/122/tysvertunet-logo-hvit.png',
            CinemaIdEnum::NO_STOREN => 'https://dx-cw-static-files.imgix.net/184/sk-logo-full-1000px.svg',
            CinemaIdEnum::NO_HJERTNES_KULTURHUS => null,
            CinemaIdEnum::NO_FELIX => 'https://ebillett.no/images/ebillett-logo.svg',
            CinemaIdEnum::NO_FREDIKSTAD_KINO => 'https://dx-cw-static-files.imgix.net/178/fredrikstad-kino-hvit-web.png',
            CinemaIdEnum::NO_CINEMATEKET_BERGEN => 'https://tuploads.s3.eu-west-1.amazonaws.com/production/uploads/branding/header_logo_image/36532/Logo-Cinemateket-hvit-transp_png.png',
            CinemaIdEnum::NO_ODEON => 'https://images.ctfassets.net/uplbey57gb23/18rO8qIY7AxMorCDuyO3Kr/4c03c6b6c39656cbb7b081025a863f7d/odeonlogo.png?h=32&q=70',

            // Netherlands
            CinemaIdEnum::NL_C_CINEMA => null,
            CinemaIdEnum::NL_KOK_CINEMAXX => 'https://www.kokcinemaxx.nl/wp-content/uploads/sites/2/2022/07/logo_kokcinemaxx.png',
            CinemaIdEnum::NL_DAVINCI_GOES => 'https://bioscoopgoes.nl/assets/components/bioscoopgoes/templates/images/logo.svg',
            CinemaIdEnum::NL_CINECITY => 'https://www.cinecity.nl/assets/gfx/logo_site.png',
            CinemaIdEnum::NL_PATHE => 'https://www.pathe.nl/assets/source/img/logo-international-white.svg',
            CinemaIdEnum::NL_VUE => 'https://www.myvue.com/-/jssmedia/global/img/logo-header-vue.png?mw=300&mh=80&rev=5d978a6ad9c04cac97869073febdf5c4',
            CinemaIdEnum::NL_KINEPOLIS => 'https://kinepolis.nl/sites/all/themes/custom/kinepolis_zen/logo.png',

            // Luxembourg
            CinemaIdEnum::LU_KINEPOLIS => 'https://kinepolis.lu/sites/all/themes/custom/kinepolis_zen/logo.png',

            // Ireland
            CinemaIdEnum::IE_IMC => "https://imc.ie/wp-content/themes/A1cinemachain/img/imc.svg",
            CinemaIdEnum::IE_GATE_CINEMA => "https://gatecinemas.com/images/logo.png",
            CinemaIdEnum::IE_ARC_CINEMA => "https://greatyarmouth.arccinema.co.uk/assets/images/logo_large.png",
            CinemaIdEnum::IE_THE_W_CINEMA => "https://www.thewcinema.com/images/thewcinemalogo.png",
            CinemaIdEnum::IE_REGAL => "https://regalcinema.ie/wp-content/themes/regal-cinema/assets/img/logo.png",
            CinemaIdEnum::IE_MAYO_MOVIE_WORLD => "https://mayomovieworld.static.cinesync.io/images/theater/cinema/logo_(1).png",
            CinemaIdEnum::IE_CINEWORLD => "https://www.cineworld.ie/mrest/logos/v1/10109/logo.svg",
            CinemaIdEnum::IE_VUE => 'https://www.myvue.com/-/jssmedia/global/img/logo-header-vue.png?mw=300&mh=80&rev=5d978a6ad9c04cac97869073febdf5c4',
            CinemaIdEnum::IE_CENTURY_CINEMA => "https://centurycinemas.ie/images/cc-logo-header.png",
            CinemaIdEnum::IE_THE_REEL_PICTURES => "https://ballincollig.thereelpicture.com/assets/images/logo_large.png",
            CinemaIdEnum::IE_OMNIPLEX => "https://www.omniplex.ie/images/omniplex_logo.svg",
            CinemaIdEnum::IE_CINEMA_KILLARNEY => "https://www.cinemakillarney.com/assets/images/logo_large.png",
            CinemaIdEnum::IE_ODEON => "https://www.odeoncinemas.ie/media/ehgpomhe/odeon-logo-web.svg",
            CinemaIdEnum::IE_EYE_CINEMA => "https://cms-assets.webediamovies.pro/cdn-cgi/image/dpr=1,fit=crop,gravity=auto,metadata=none,quality=85,width=500,height=146/production/3575/ffadb451260e20b5a0da7a5a15187a0b.png",

            // Iceland
            CinemaIdEnum::IS_BIO_PARADIS => 'https://bioparadis.is/wp-content/themes/bioparadis/library/bioparadis-logo.svg',

            // Germany
            CinemaIdEnum::DE_SOEST_UNIVERSUM => 'https://cdn.cineweb.de/media/kinobilder/509/VvuLsMcyDvkpFJKLishWbJgMP6UEOuAJUpSFZxv2.png',
            CinemaIdEnum::DE_KINOPLAST => null,
            CinemaIdEnum::DE_FILMFORUM => 'https://cdn.cineweb.de/media/kinobilder/664/5lEPzDiC8jlqBlliskSfyiTUaDc5PVNYHyYWTMn7.png?text=Logo',
            CinemaIdEnum::DE_KINO_BOIZENBURG => 'https://static.wixstatic.com/media/d66ed0_a49e45a4963348eaa993a61a30399111~mv2.png/v1/fill/w_981,h_123,al_c,lg_1,q_85,enc_avif,quality_auto/Kino_Banner_Boizenburg.png',
            CinemaIdEnum::DE_KINORAMA_UNNA => 'https://www.kino-unna.de/clients/69/img/logo.png',
            CinemaIdEnum::DE_CAPITOL_LITTLE => 'https://cdn.cineweb.de/media/kinobilder/417/Qw0dJMyKqyFtn1NBwBJbSrPSFaOlG2Rk2CXLnJRf.png',
            CinemaIdEnum::DE_KINO_ZEIT => 'https://www.kino-zeit.de/themes/kinozeit/images/kino-zeit_logo.svg',
            CinemaIdEnum::DE_CASABLANCA_ART => 'https://www.casablanca-badsoden.de/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.8f66ede0.png&w=256&q=75',
            CinemaIdEnum::DE_CINETECH => 'https://www.cinetech.de/_next/image?url=%2Fmove-to-cdn%2Fimages%2Fcinetech-logo.png&w=1080&q=75',
            CinemaIdEnum::DE_CINEMOON => 'https://cineamo-cdn.b-cdn.net/cinema-logo-wide-image/b1000818-da2e-4413-9929-e905a4b9882e?width=640&optimizer=image',
            CinemaIdEnum::DE_SCALA_TUTTLINGEN => 'https://scala-tuttlingen.de/App/Assets/ci/kinotainment-tuttlingen/img/logo_weiss_transparent.png',
            CinemaIdEnum::DE_ZINEMA_CITY => 'https://cdn.cineweb.de/media/kinobilder/654/fot7SnqESCphOQQcZv45Qks9Gl9nBmpxBFLEVPPZ.png',
            CinemaIdEnum::DE_APOLLO_CINEMAS => 'https://cdn.cineweb.de/media/kinobilder/668/GsmEdqr7jBM6BRZh9aFtFII60LipH6da6LU5fC8C.png',
            CinemaIdEnum::DE_KINOCENTER_BORKEN => 'https://www.kinocenterborken.de/clients/46/img/logo_shop_pdf.png',
            CinemaIdEnum::DE_CINECITTA => 'https://static.cinecitta.de/portal/skins/cine_corvus/pics/theater/cinecitta.svg',
            CinemaIdEnum::DE_CINEDOM => 'https://cinedom.de/wp-content/uploads/sites/2/2022/03/CINE_Logo_pos_Claim_RGB_RZ-1024x439-2.png',
            CinemaIdEnum::DE_KINOWELT => 'https://www.kinowelt-sylt.de/wp-content/uploads/2015/07/cropped-cropped-kwwl_2015-2.png',
            CinemaIdEnum::DE_KLEVERKINOS => 'https://www.kleverkinos.de/clients/495/img/logo.png',
            CinemaIdEnum::DE_JAC_KINO => 'https://www.jac-kino.de/clients/446/img/logo.png',
            CinemaIdEnum::DE_LUNA => 'https://www.lunafilmtheater.de/bilder_web/LunaBanner.jpg',
            CinemaIdEnum::DE_UCI_MULTIPLEX => 'https://www.uci-kinowelt.de/css/images/design/uci-logo.png',
            CinemaIdEnum::DE_KINODROM => 'https://www.kinodrom.de/clients/44/img/logo.png',
            CinemaIdEnum::DE_CINEMAXX_VUE => 'https://www.cinemaxx.de/assets/css/images/logo-cinemaxx.svg',
            CinemaIdEnum::DE_KINOPOLIS => 'https://trailer.kinopolis.de/media/img/logos/kinopolis.png?20251011',
            CinemaIdEnum::DE_CINEPLEX => 'https://www.cineplex.de/static/images/cp_logo_stadtauswahl.svg',
            CinemaIdEnum::DE_CINESTAR => 'https://www.cinestar.de/bundles/website/images/layout/logo.png',

            // Denmark
            CinemaIdEnum::DK_VUE => 'https://cms-assets.webediamovies.pro/cdn-cgi/image/dpr=1,fit=crop,gravity=auto,metadata=none,quality=85,width=250,height=102/production/4618/9d3616f41875a6727b9c82789d154ee8.png',

            // Belgium
            CinemaIdEnum::BE_PATHE => 'https://www.pathe.be/assets/source/img/logo-international-white.svg',
            CinemaIdEnum::BE_KINEPOLIS => 'https://kinepolis.be/sites/all/themes/custom/kinepolis_zen/logo.png',

            // United Kingdom
            CinemaIdEnum::GB_BACKLOT => 'https://indy-systems.imgix.net/zwebgxpekbr27lnp185yaugovq2e?w=400&auto=format',
            CinemaIdEnum::GB_ARC => 'https://greatyarmouth.arccinema.co.uk/assets/images/logo_large.png',
            CinemaIdEnum::GB_THROWLEY_YARD => 'https://indy-systems.imgix.net/wdcofoosr8yuqcbw4ygxyehw3lqu?w=1200&auto=format',
            CinemaIdEnum::GB_EARLING_PROJECT => 'https://indy-systems.imgix.net/dok5cwkie8nnr94x58hl49cpv2uy?w=1200&auto=format',
            CinemaIdEnum::GB_OMNIPLEX => 'https://www.omniplex.ie/images/omniplex_logo.svg',
            CinemaIdEnum::GB_WATERMANS => 'https://www.watermans.org.uk/wp-content/themes/watermans/img/global/logo.png',
            CinemaIdEnum::GB_HIGHLIAND => 'https://highlandcinema.co.uk/wp-content/uploads/2020/09/HC-Landscape-Black-Animated-scaled-2.gif',
            CinemaIdEnum::GB_THE_LIGHT => 'https://thelight.co.uk/img/logo-white.svg',
            CinemaIdEnum::GB_ODEON => "https://www.odeon.co.uk/media/ehgpomhe/odeon-logo-web.svg",
            CinemaIdEnum::GB_PERTH_PLAYHOUSE => "https://indy-systems.imgix.net/2rspj73jxtch2h7ny22atgvflr1t?w=400&auto=format",
            CinemaIdEnum::GB_SAVOY => 'https://images.savoysystems.co.uk/SVN/38746823.jpg',
            CinemaIdEnum::GB_VUE => 'https://www.myvue.com/-/jssmedia/global/img/logo-header-vue.png?mw=300&mh=80&rev=5d978a6ad9c04cac97869073febdf5c4',
            CinemaIdEnum::GB_SHOWCASE => 'https://cms-assets.webediamovies.pro/cdn-cgi/image/dpr=1,fit=crop,format=webp,gravity=auto,metadata=none,quality=85,width=500,height=138/production/4756/e8bc079fc984897dec24fc94fe83eafb.png',
            CinemaIdEnum::GB_CINEWORLD => 'https://www.cineworld.co.uk/mrest/logos/v1/10108/logo.svg',
        };
    }
}