<?php
require 'connect.php';

$pdo = connect();
$queryRes = $pdo->query('SELECT * FROM users;');       // vuole la query nel formato stringa, gli dico di selezionare tutto dai ruoli, 
//lo memorizzo in queryres, mi restituisce un array di risultato

$h = fopen('../uploads/csv-example.csv', 'w+');

foreach($users as $user) {  // per ogni elemento di data che chiamerò row, farò:
     fputcsv($h, $user);
}

fgetcsv(); 
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
                <th>Nome:</th>
                <th>Cognome:</th>
                <th>Email:</th>
                <th>ID User:</th>
            </tr>
        </thead>
        <tbody>
           

        <?php foreach ($queryRes as $row):   //tabella che stampo un po' secondo lo stesso principio di JS con i dati che ricevo dal form users ?>   
            
                <tr>
                    <td><?= $row["nome"] ?></td>
                    <td><?= $row["cognome"] ?></td>
                    <td><?= $row["email"] ?></td>     
                    <td><?= $row["id_user"] ?></td> 
                    <td><a href="delete-user.php?id=<?= $row['id'] ?>">Delete</a> </td>
                              
                                                
                </tr>              
        <?php endforeach; ?>


        </tbody>
    </table>

</body>

</html>