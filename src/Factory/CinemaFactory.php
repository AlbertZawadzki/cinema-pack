<?php

namespace CinemaPack\Factory;

use CinemaPack\Contracts\CinemaCityMapperInterface;
use CinemaPack\Contracts\CinemaCountryMapperInterface;
use CinemaPack\Contracts\CinemaImageMapperInterface;
use CinemaPack\Contracts\CinemaNameMapperInterface;
use CinemaPack\Contracts\CinemaUrlMapperInterface;
use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;

class CinemaFactory
{
    public function __construct(
        private readonly CinemaNameMapperInterface    $nameMapper,
        private readonly CinemaUrlMapperInterface     $urlMapper,
        private readonly CinemaImageMapperInterface   $imageMapper,
        private readonly CinemaCountryMapperInterface $countryMapper,
        private readonly CinemaCityMapperInterface    $cityMapper,
    )
    {
    }

    public function createCinema(CinemaIdEnum $id): CinemaDto
    {
        $name = $this->nameMapper->mapIdToName($id);
        $url = $this->urlMapper->mapIdToUrl($id);
        $image = $this->imageMapper->mapIdToImageUrl($id);
        $country = $this->countryMapper->mapIdToCountry($id);

        return new CinemaDto(
            $id,
            $country,
            $name,
            $url,
            $image
        );
    }
}