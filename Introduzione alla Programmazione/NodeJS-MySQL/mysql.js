const mysql = require("mysql");
// Crea la connessione al database
const connessione = mysql.createConnection({
// Parametri di connessione
  host: 'localhost',
  user: 'eliox',
  password: '**********',
  database: 'test_node_mysql',
});
// Connessione al database
connessione.connect((err) => {
  if (err) {
    console.error('Errore nel tentativo di connessione:', err);
    return;
  }
  console.log('Connessione stabilita correttamente.');
  // Chiusura della connessione
  connessione.end((err) => {
    if (err) console.error('Tentativo di chiusura della connessione fallito:', err);
    else console.log('Connessione chiusa correttamente.');
  });
});