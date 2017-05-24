<?php

namespace BinaryStudioAcademy\Task1;

abstract class AbstractPokemon implements Pokemon
{
    const BASE_PICTURE = 'https://img.pokemondb.net/artwork/';

    public abstract function getName(): string;

    public function imageUrl(): string
    {
        //фикс проблемы с именем Пикачу. Класс pichachu , а ссылка на картинку .../pikachu.jpg
        if ($this->getName() === 'Pickachu') {
            return self::BASE_PICTURE . 'pikachu.jpg';
        }
        return self::BASE_PICTURE . lcfirst($this->getName()) . '.jpg';
    }
}