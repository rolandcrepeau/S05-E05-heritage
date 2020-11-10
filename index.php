<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once __DIR__ . '/classes/Person.php';
require_once __DIR__ . '/classes/Developpeur.php';
require_once __DIR__ . '/classes/SuperHero.php';



$guillaume = new Person('Guillaume', 42, 'La blague du zéro et du huit');
$guillaume->sayHello();
//var_dump($guillaume);
//$guillaume->coder();






$quentin = new Developper('Quentin', 43, 'Qui est vert et qui monte et qui descend ?', 'PHP', 'Mac');
$quentin->sayHello();
echo $quentin->blague;
$quentin->coder();

$kevin = new SuperHero('Kevin',44,"qui est jaune et qui pete");
$kevin->saySuperHello();