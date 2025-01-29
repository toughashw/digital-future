<?php
// Verifica se i dati sono stati inviati via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i dati inviati dal form
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $anno = $_POST['anno'];

    // Configura i dettagli del database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'nome_database';

    // Connessione al database
    $conn = new mysqli($host, $username, $password, $dbname);

    // Controlla se c'è un errore di connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    // Prepara la query per l'inserimento
    $stmt = $conn->prepare("INSERT INTO libri (titolo, autore, anno) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $titolo, $autore, $anno);

    // Esegui la query
    if ($stmt->execute()) {
        echo "Libro inserito con successo!";
    } else {
        echo "Errore nell'inserimento: " . $stmt->error;
    }

    // Chiudi lo statement e la connessione
    $stmt->close();
    $conn->close();
    
    // Redirect alla pagina principale (inserisci_libro.php)
    header("Location: inserisci_libro.php");
    exit();
}
?>

