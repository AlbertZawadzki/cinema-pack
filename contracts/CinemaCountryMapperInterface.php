<?php

namespace CinemaPack\Contracts;

use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Dto\CountryDto;

interface CinemaCountryMapperInterface
{
    public function mapIdToCountry(CinemaIdEnum $id): ?CountryDto;
}