// La stringa JSON che vogliamo parsare
const jsonString = '{"nome": "Mario", "cognome": "Rossi", "eta": 30, "citta": "Milano", "telefono": "+39 123 456 7890", "email": "mario.rossi@example.com", "indirizzo": "Via Roma 123, Milano, Italia"}';

// Parsing della stringa JSON in un oggetto JavaScript
const persona = JSON.parse(jsonString);

// Mostra l'oggetto prima di rimuovere i campi
console.log("Prima della rimozione:", persona);

// Rimuovere i campi 'telefono' e 'indirizzo'
delete persona.telefono;
delete persona.indirizzo;

// Mostra l'oggetto dopo aver rimosso i campi
console.log("Dopo la rimozione:", persona);

// Serializzare l'oggetto aggiornato in una stringa JSON
const updatedJsonString = JSON.stringify(persona, null, 2);

// Mostra il JSON aggiornato
console.log(updatedJsonString);
