<?php

namespace CinemaPack\Dto;


use CinemaPack\Enum\CinemaIdEnum;
use CountryPack\Dto\CountryDto;

class CinemaDto
{
    public function __construct(
        public CinemaIdEnum $id,
        public CountryDto   $country,
        public string       $name,
        public ?string      $url,
        public ?string      $imageUrl,
    )
    {
    }
}