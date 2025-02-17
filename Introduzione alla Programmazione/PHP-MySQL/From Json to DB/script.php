<?php
// Configurazione del database MySQL
$host = '';
$username = '';  // Usa il tuo nome utente MySQL
$password = '';      // Usa la tua password MySQL
$dbname = ''; // Usa il tuo nome di database

// Connessione al database MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Controlla se la connessione è riuscita
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Leggi il file JSON
$jsonData = file_get_contents('data.json');
$data = json_decode($jsonData, true); // Decodifica il JSON in un array associativo

// Preparare la query SQL per inserire i dati nel database
$stmt = $conn->prepare("INSERT INTO utenti (nome, cognome, email) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $nome, $cognome, $email); // "ssi" indica che il primo e secondo parametro sono stringhe, il terzo è un intero

// Itera attraverso i dati e inseriscili nel database
foreach ($data as $user) {
    $nome = $user['nome'];
    $cognome = $user['cognome'];
    $email = $user['email'];  

    // Esegui la query di inserimento
    if ($stmt->execute()) {
        echo "Dati inseriti con successo: $nome, $cognome, $email\n";
    } else {
        echo "Errore nell'inserimento dei dati: " . $stmt->error . "\n";
    }
}

// Chiudi la connessione
$stmt->close();
$conn->close();
?>
