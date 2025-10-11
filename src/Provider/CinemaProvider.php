<?php

namespace CinemaPack\Provider;

use CinemaPack\Dto\CinemaDto;
use CinemaPack\Enum\CinemaIdEnum;
use CinemaPack\Factory\CinemaFactory;
use Generic\GenericCollection;

class CinemaProvider
{
    public function __construct(
        private readonly CinemaFactory $cinemaFactory,
    )
    {
    }

    /** @return GenericCollection<CinemaDto> */
    public function getAll(): GenericCollection
    {
        $cinemas = new GenericCollection(CinemaDto::class);

        foreach (CinemaIdEnum::cases() as $id) {
            $cinema = $this->cinemaFactory->createCinema($id);
            $cinemas->add($cinema);
        }

        return $cinemas;
    }
}