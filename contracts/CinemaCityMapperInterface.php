<?php

namespace CinemaPack\Contracts;

use CinemaPack\Enum\CinemaIdEnum;

interface CinemaCityMapperInterface
{
    public function mapIdToCities(CinemaIdEnum $id): array;
}