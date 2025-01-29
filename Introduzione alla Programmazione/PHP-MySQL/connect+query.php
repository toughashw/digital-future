<?php
// Dettagli della connessione
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'nome_database';

// Connessione al database
$conn = new mysqli($host, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Esegui la query
$sql = "SELECT * FROM libri";
$result = $conn->query($sql);

// Controlla i risultati
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Titolo: " . $row["titolo"] . " - Autore: " . $row["autore"] . "<br>";
    }
} else {
    echo "Nessun risultato trovato.";
}

// Chiudi la connessione
$conn->close();
?>
