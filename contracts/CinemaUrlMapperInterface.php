<?php

namespace CinemaPack\Contracts;

use CinemaPack\Enum\CinemaIdEnum;

interface CinemaUrlMapperInterface
{
    public function mapIdToUrl(CinemaIdEnum $id): ?string;
}