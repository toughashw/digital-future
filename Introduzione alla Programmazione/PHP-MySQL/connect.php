<?php
// Parametri di connessione
$host = 'localhost'; // o l'IP del tuo server
$username = 'root';  // il tuo username MySQL
$password = '';      // la tua password MySQL
$dbname = 'nome_database'; // il nome del tuo database

// Crea la connessione
$conn = new mysqli($host, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
echo "Connessione riuscita!";

// Chiudi la connessione
$conn->close();
?>
