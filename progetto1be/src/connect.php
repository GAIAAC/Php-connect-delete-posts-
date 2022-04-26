<?php

function connect() {
    $db = "blog";                       //agglomerato di info che uso con pdo
    $hostname = "localhost:3306";
    $username = "root";
    $password = "";

    try {                               // tutto dentro il try and catch perche' cosi' se ho errori li mette in eccezione e notifica
        $pdo = new PDO(             //pdo e' strumento che serve a collegarsi con i database
            "mysql:host=$hostname;dbname=$db",
            $username,
            $password
        );
    } catch(Exception $e) {
        echo "Errore!";
        var_dump($e);
    }

    return $pdo;
}
 ?>