<?php

namespace BinaryStudioAcademy\Task1;

abstract class AbstractPokemon implements Pokemon
{
    const IMAGE_URL = 'https://img.pokemondb.net/artwork/pikachu.jpg';

    public abstract function getName(): string;

    public function imageUrl(): string
    {
        return self::IMAGE_URL;
    }
}