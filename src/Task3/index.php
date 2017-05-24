<?php

require __DIR__ . '/../../vendor/autoload.php';
use BinaryStudioAcademy\Task3\PokemonPresenter;
use BinaryStudioAcademy\Task1;

$pokemons = [
    new Task1\Pickachu,
    new Task1\Bulbasaur,
    new Task1\Psyduck,
    new Task1\Slowpoke,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
    <style>
        .center {text-align: center;}
        section h1 {font-size: 40px; }
        section ul li { list-style: none;}
    </style>
</head>
<body>
<section class="center">
    <h1>Pokemons</h1>
    <?php
        echo (new PokemonPresenter($pokemons))->present();
    ?>
</section>
</body>
</html>