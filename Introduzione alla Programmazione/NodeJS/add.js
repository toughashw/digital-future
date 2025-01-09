// La stringa JSON che vogliamo parsare
const jsonString = '{"nome": "Mario", "cognome": "Rossi", "eta": 30, "citta": "Milano"}';

// Parsing della stringa JSON in un oggetto JavaScript
const persona = JSON.parse(jsonString);

// Aggiungere nuovi campi all'oggetto
persona.telefono = "+39 123 456 7890";
persona.email = "mario.rossi@example.com";
persona.indirizzo = "Via Roma 123, Milano, Italia";

// Ora possiamo serializzare nuovamente l'oggetto in una stringa JSON aggiornata
const updatedJsonString = JSON.stringify(persona, null, 2); // 'null, 2' per formattare il JSON in modo leggibile

// Mostra il JSON aggiornato
console.log(updatedJsonString);
