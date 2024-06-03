<?php

require_once "Reader.php";

## 1. Créez un lecteur et ajoutez deux livres à sa liste de favoris. 
//Créer 1 livre
$reader = new Reader('marie@eva.fr', 'Marie');

// Ajouter 2 livres à sa liste de favoris
$reader->addBookToFavorites("Le Petit Prince");
$favoriteBooks = $reader->addBookToFavorites("Les trois soeurs");

## 2. Affichez la liste de ses livres favoris

foreach($favoriteBooks as $book){
    echo $book."<br>";
}

## print_r($reader->addBookToFavorites(''));

## 3. Retirez l'un des deux livres.

$favoriteBooks = $reader->removeBookFromFavorites("Les trois soeurs");

## 4. Affichez la liste de ses livres favoris
//$book est la variable qui contient la valeur courante du tablo ^favoritesBooks
foreach($favoriteBooks as $book){
    echo $book."<br>";
}

##print_r($reader->addBookToFavorites(''));

## 5. Affichez son email et son mot de passe sans modifier les classes.

$login = $reader->login();

echo "{$login['login']}, {$login['password']} <br>";


