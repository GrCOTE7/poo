<?php

/**
 * MVC (POO) - (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once './vendor/autoload.php';
// $a = new Mvc();

$loader = new FilesystemLoader('./views/pages');
$twig   = new Environment($loader, [
	'cache' => false,
]);
echo $twig->render('home.twig', ['the' => 'variables', 'go' => 'here']);
