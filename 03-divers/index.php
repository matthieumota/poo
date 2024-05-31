<?php

ini_set('display_errors', 'On');

require '../easydump/easydump.php';

require 'Greeting.php';
require 'DB.php';

Greeting::$who = 'Jeremy';
EasyDump::debug(new Greeting());

var_dump(Greeting::welcome());
(new Greeting())->welcome();

(new Greeting())->goodBye();

Greeting::dump([1, 2, 3]);

echo '<h1>---- Classe DB ----</h1>';
echo '<hr />';

// DB::insert('INSERT INTO users (name) VALUES ("Fio"), ("Toto")');
$users = DB::select('SELECT * FROM users');
EasyDump::debug($users);

DB::config('poo'); // Change la BDD
$ids = [1, 2, 3, 4, 5, 6];
$in = str_repeat('?, ', count($ids) - 1).'?';
$users = DB::config('poo')->select('SELECT * FROM users WHERE id IN ('.$in.')', $ids);
EasyDump::debug($users);

EasyDump::debug(DB::select('SELECT * FROM users WHERE id = 1'));

echo '<h1>---- Interfaces ----</h1>';
echo '<hr />';

require 'Book.php';

$book = new Book('Super', 200, ['a', 'b']);
echo count($book);
var_dump($d = serialize($book));
var_dump(unserialize($d));
