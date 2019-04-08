<?php

	require 'Attack.php';
	require 'Pokemon.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';
	require 'Type.php';
	require 'Resistance.php';
	require 'Weakness.php';

$types = [
		new Type ("Lightning"),
		new Type ("Water"),
		new Type ("Fire"),
		new Type ("Gas")
];

$pokemon1 = new Pikachu(
	"Pikachu",
	$types[0],
	150,
	new Resistance($types[2], 10),
    new Weakness($types[3], 1.5),
	[
		new attack ('"Electric Ring"', 50),
		new attack ('"Pika Punch"', 20)
	]
);

$pokemon2 = new Charmeleon(
	"Charmeleon",
	$types[2],
	150,
	new Resistance($types[3], 10),
    new Weakness($types[0], 2),
	[
		new attack ('"Head Butt"', 10),
		new attack ('"Flare"', 30)
	]
);

echo $pokemon1->attacks[0]->attack($pokemon1,$pokemon2);
