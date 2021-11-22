<?php

$username = "root";
$password = "root"; /* verifier si le mot de passe et ROOT ou rien*/
$host = "localhost"; /* adresse de ma machine*/
$db = "Avengers";
$port = "3306";

$option = [
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
];

$dsn = "mysql:host=$host;dbname=$db;charset=utf8; port=$port";

try {

    $connexion = new \PDO($dsn, $username, $password, $option);
} catch (\PDOException $error) {
    $message = $error->getMessage();
    var_dump($message, (int) $error->getCode());
    die("Erreur lors de la connexion PDO");
}
