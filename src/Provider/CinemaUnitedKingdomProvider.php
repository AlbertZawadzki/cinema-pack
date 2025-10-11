<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Enum\Iso31661Alpha2;
use CountryPack\Provider\CountryProvider;

class CinemaUnitedKingdomProvider
{
    public function __construct(
        private readonly CountryProvider $countryProvider,
    )
    {
    }

    /** @return CinemaDto[] */
    public function getAll(): array
    {
        $country = $this->countryProvider->getByIso31661Alpha2(Iso31661Alpha2::GB);

        return [
            new CinemaDto(CinemaIdEnum::UK_BACKLOT, $country, 'The Backlot Cinema', 'https://www.thebacklotcinema.co.uk', 'https://indy-systems.imgix.net/zwebgxpekbr27lnp185yaugovq2e?w=400&auto=format'),
            new CinemaDto(CinemaIdEnum::UK_ARC, $country, 'The Arc UK', 'https://arccinema.co.uk', 'https://greatyarmouth.arccinema.co.uk/assets/images/logo_large.png'),
            new CinemaDto(CinemaIdEnum::UK_THROWLEY_YARD, $country, 'Throwley Yard Cinema', 'https://www.throwleyyardcinema.co.uk', 'https://indy-systems.imgix.net/wdcofoosr8yuqcbw4ygxyehw3lqu?w=1200&auto=format'),
            new CinemaDto(CinemaIdEnum::UK_EARLING_PROJECT, $country, 'Ealing Project', 'https://www.ealingproject.co.uk', 'https://indy-systems.imgix.net/dok5cwkie8nnr94x58hl49cpv2uy?w=1200&auto=format'),
            new CinemaDto(CinemaIdEnum::UK_OMNIPLEX, $country, 'Omniplex UK', 'https://www.omniplex.ie', 'https://www.omniplex.ie/images/omniplex_logo.svg'),
            new CinemaDto(CinemaIdEnum::UK_WATERMANS, $country, 'Watermans Arts Centre', 'https://www.watermans.org.uk', 'https://www.watermans.org.uk/wp-content/themes/watermans/img/global/logo.png'),
            new CinemaDto(CinemaIdEnum::UK_HIGHLIAND, $country, 'Highland Cinema', 'https://highlandcinema.co.uk', 'https://highlandcinema.co.uk/wp-content/uploads/2020/09/HC-Landscape-Black-Animated-scaled-2.gif'),
            new CinemaDto(CinemaIdEnum::UK_THE_LIGHT, $country, 'The Light', 'https://lightcinemas.co.uk', 'https://thelight.co.uk/img/logo-white.svg'),
            new CinemaDto(CinemaIdEnum::UK_ODEON, $country, 'Odeon', 'https://www.odeon.co.uk', "https://www.odeon.co.uk/media/ehgpomhe/odeon-logo-web.svg"),
            new CinemaDto(CinemaIdEnum::UK_PERTH_PLAYHOUSE, $country, 'The perth playhouse', 'https://www.theperthplayhouse.co.uk', "https://indy-systems.imgix.net/2rspj73jxtch2h7ny22atgvflr1t?w=400&auto=format"),
            new CinemaDto(CinemaIdEnum::UK_SAVOY, $country, 'Savoy cinemas', 'https://www.savoyonline.co.uk', 'https://images.savoysystems.co.uk/SVN/38746823.jpg'),
            new CinemaDto(CinemaIdEnum::UK_VUE, $country, 'Vue', 'https://www.myvue.com', 'https://www.myvue.com/-/jssmedia/global/img/logo-header-vue.png?mw=300&mh=80&rev=5d978a6ad9c04cac97869073febdf5c4'),
            new CinemaDto(CinemaIdEnum::UK_SHOWCASE, $country, 'Showcase', 'https://www.showcasecinemas.co.uk', 'https://cms-assets.webediamovies.pro/cdn-cgi/image/dpr=1,fit=crop,format=webp,gravity=auto,metadata=none,quality=85,width=500,height=138/production/4756/e8bc079fc984897dec24fc94fe83eafb.png'),
            new CinemaDto(CinemaIdEnum::UK_CINEWORLD, $country, 'Cineworld', 'https://www.cineworld.co.uk', 'https://www.cineworld.co.uk/mrest/logos/v1/10108/logo.svg'),
        ];
    }
}