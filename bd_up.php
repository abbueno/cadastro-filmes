<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
    echo "\ntabela filmes apagada\n";

$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR (200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL (2,1)
    )
    ";

if ($bd->exec($sql))
    echo "\ntabela filmes criada\n";
else
    echo "\erro ao criar tabela filmes\n";


$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    'Vingadores',
    'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Depois dos eventos debastadores de Guerra do Infinito, o universo está em ruínas',
    9.5)";

if ($bd->exec($sql))
echo "\nfilmes inseridos com sucesso\n";
else
echo "\erro ao inserir filmes\n";

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    'Vingadores2',
    'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Depois dos eventos debastadores de Guerra do Infinito, o universo está em ruínas',
    9.9)";

if ($bd->exec($sql))
echo "\nfilmes inseridos com sucesso\n";
else
echo "\erro ao inserir filmes\n";

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    'Vingadores3',
    'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Depois dos eventos debastadores de Guerra do Infinito, o universo está em ruínas',
    9.3)";

if ($bd->exec($sql))
echo "\nfilmes inseridos com sucesso\n";
else
echo "\erro ao inserir filmes\n";

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    'Vingadores4',
    'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Depois dos eventos debastadores de Guerra do Infinito, o universo está em ruínas',
    9.4)";

if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else
    echo "\erro ao inserir filmes\n";


?>