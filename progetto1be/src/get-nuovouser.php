<?php
require_once('connect.php');


// recupero i valori daglispazi del form e li assegno alle variabili corrispondenti, le variabili mi serviranno sotto
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$id_user = $_POST['id_user'];


//questa query viene richiamata giu per evitare di scrivere tutto questo papocchio, utilizzo simile a funzioni
$toinsert = "INSERT INTO users                      
			(nome, cognome, email, id_user)
			VALUES
			(?, ?, ?, ?)";


//gli dico di usare la funzione connect ed e' inq uesot modo che dovrebbero finire nel database
connect()->prepare($toinsert)->execute([$nome, $cognome, $email, $id_user]);	//<- applica sequenze di escape in automatico 
if($toinsert){
	echo("<br>Inserimento avvenuto correttamente");
} else{
	echo("<br>Inserimento non eseguito");
}
?>