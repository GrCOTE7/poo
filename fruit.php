<?php

/**
 * Fruit (POO) - (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

include './vendor/autoload.php';
use App\Fruit;
use App\Gc7;
use App\Vegetable;

$f = new Fruit('pomme', 'yellow', 150, true);

Gc7::aff($f);

echo '<hr><h1>Belle ' . $f->getName() . ' !</h1>(' . $f->getColor() . ' et ' . $f->getWeight() . ' grammes !!! - ' . ($f->is_comestible() ? 'Comestible' : 'Pas good') . ')';

$f->setWeight(250);

echo '<hr><h1>Encore + belle ' . $f->getName() . ' !</h1>(' . $f->getColor() . ' et <strong>' . $f->getWeight() . ' grammes</strong>, soit ' . $f->getKilo() . ' kg !!!) → ' . ($f->is_comestible() ? 'Mangeable' : 'Indigeste !!!');

$v = new Vegetable('patate', 'rouge', 450);

echo '<hr><h1>Et ma patate, elle est pas belle ?<br>Et une ' . $v->getName() . ' ! Une !</h1>(' . $v->getColor() . ' et <strong>' . $v->getWeight() . ' grammes</strong>, soit ' . $v->getKilo() . ' kg !!!)<br><br>';

echo '(À noter que ' . $v->getName() . ' est <u>une instance de ' . (get_class($v)) . '</u>)';

Gc7::aff($v);