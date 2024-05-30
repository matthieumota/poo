<?php

ini_set('display_errors', 'On');

require_once '../../easydump/easydump.php';
require_once 'Book.php';
require_once 'Library.php';

$b = new Book("Harry Potter à l'école des sorciers", 250);
echo $b->page(); // 1
$b->nextPage(); // tourne la page (ne fait rien si on est sur la dernière page)
echo $b->page(); // 2
$b->close(); // ferme le livre (reviens à la page 1)
echo $b->getName(); // Récupère le nom du livre
echo $b->countPages(); // Récupère le nombre de pages

EasyDump::debug($b);

$l = new Library();
$b = new Book("Harry Potter à l'école des sorciers", 250);
$l->addBook($b); // Ajoute le livre b dans un tableau
$l->addBooks([ // Ajoute les livres suivant dans un tableau
    new Book('Chambre des secrets', 300),
    new Book('Prisonnier d\'Azkaban', 400),
    new Book('Coupe de feu', 500)
]);

EasyDump::debug($l->books());
EasyDump::debug($l->count());
EasyDump::debug($l->totalPages());

$b2 = $l->getBook("Coupe de feu");
EasyDump::debug($b2);

EasyDump::debug($l->findBooksByLetter('C'));

EasyDump::debug($l->randomBook());
