<?php

$usuario = 'root';
$senha = '';
$database = 'crud';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die("Falha ao conectar com o banco " . $mysqli->error);
}
