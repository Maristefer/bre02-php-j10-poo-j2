<?php

require_once "Warrior.php";
require_once "Mage.php";

/*Instanciez un `Character`, un `Warrior` et un `Mage` et faites les se présenter.

Puis pour le `Warrior`, faites le se présenter et annoncer son niveau de vie et d'énergie.

Puis pour le `Mage`, faites le se présenter et annoncer son niveau de vie et de mana.*/

$character = new Character();
$character->setName("Marie");

$warrior = new Warrior(60, "Marie", 200);

$mage = new Mage(70, "Lilas", 600);

// Présentation de chaque personnage
echo $character->introduce().$name;
echo $warrior->introduce() . $name;
echo $mage->introduce() . $name;

// Annonce du niveau de vie et d'énergie du Warrior
echo $warrior->getName() . " a " . $warrior->getLife() . " points de vie et " . $warrior->getEnergy() . " points d'énergie.n";

// Annonce du niveau de vie et de mana du Mage
echo $mage->getName() . " a " . $mage->getLife() . " points de vie et " . $mage->getMana() . " points de mana.n";
