<?php

namespace CinemaPack\Contracts;

use CinemaPack\Enum\CinemaIdEnum;

interface CinemaImageMapperInterface
{
    public function mapIdToImageUrl(CinemaIdEnum $id): ?string;
}