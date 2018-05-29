<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$pickachu = new Pokemon('Pickachu','Electric',70);
$pickachu->setWeakness(new Weakness('Fire', 1.5));
$pickachu->setRestistance(new Resistance('Fighting', 20));
$pickachu->addAttack(new Attack("Electric Ring", 50, 'Electric'));
$pickachu->addAttack(new Attack("Picka Punch", 20, 'Water'));

$charmeleon = new Pokemon('Charmeleon','Fire',250);
$charmeleon->setWeakness(new Weakness('Electric',2));
$charmeleon->setRestistance(new Resistance('Electric',10));
$charmeleon->addAttack(new Attack("Head butt", 35, 'Water'));
$charmeleon->addAttack(new Attack("Flare", 25, 'Electric'));

foreach($pickachu->getAttacks() as $attack) {
   $attack->Execute($charmeleon);
}