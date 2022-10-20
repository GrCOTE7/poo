<?php

/**
 * MVC (POO) - (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App;

require_once './vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('./views');
$twig   = new Environment($loader, [
	'cache' => false,
]);
echo $twig->render('pages/home.twig', ['title' => 'Accueil']);
