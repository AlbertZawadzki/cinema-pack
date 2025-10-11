<?php

namespace CinemaPack\Contracts;

use CinemaPack\Enum\CinemaIdEnum;
use Symfony\Component\HttpFoundation\File\UploadedFile;

interface CinemaImageMapperInterface
{
    public function mapIdToImageUrl(CinemaIdEnum $id): UploadedFile;
}