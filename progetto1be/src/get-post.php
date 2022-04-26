<?php
require_once('connect.php');

// recupero i valori dagli spazi del post e li assegno alle variabili corrispondenti, le variabili mi serviranno sotto
// $Id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$id_users = $_POST['id_users'];
// $id_user = $_POST['id_user'];

//questa query viene richiamata giu per evitare di scrivere tutto questo papocchio, utilizzo simile a funzioni
$toinsert = "INSERT INTO posts                      
			(title, content, id_users)
			VALUES
			(?, ?, ?)";


//gli dico di usare la funzione connect ed e' inq questo modo che dovrebbero finire nel database
connect()->prepare($toinsert)->execute([$title, $content, $id_users]);    //<- applica sequenze di escape in automatico 
if ($toinsert) {
    echo ("<br>Post pubblicato!");
} else {
    echo ("<br>Qualcosa e' andato storto nella pubblicazione :(");
}
?>


