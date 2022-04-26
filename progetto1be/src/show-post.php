<?php
require 'connect.php';

$pdo = connect();
$queryRes = $pdo->query('SELECT * FROM posts;');       // vuole la query nel formato stringa, gli dico di selezionare tutto dai ruoli, 
//lo memorizzo in queryres, mi restituisce un array di risultati
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Strutturo pg html semplice solo con tabella -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Contenuto:</th>
                <th>Autore</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($queryRes as $row) {   //tabella che stampo un po' secondo lo stesso principio di JS con i dati che ricevo dal form users
                echo "      
                <tr>
                    <td>{$row["title"]}</td>
                    <td>{$row["content"]}</td>
                    <td>{$row["id_users"]}</td>           
                </tr>              
                ";
            }
            ?>

        </tbody>
    </table>
</body>

</html>