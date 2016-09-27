<?php


use Classes\NameCreation;

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, [
    'debug' => true,
]);

$name = NameCreation::createName('Kalapicinsky');

echo $twig->render('pokus.twig', ['name' => $name]);