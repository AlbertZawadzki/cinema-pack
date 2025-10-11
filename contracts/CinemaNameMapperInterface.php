<?php

namespace CinemaPack\Contracts;

use CinemaPack\Enum\CinemaIdEnum;

interface CinemaNameMapperInterface
{
    public function mapIdToName(CinemaIdEnum $id): string;
}