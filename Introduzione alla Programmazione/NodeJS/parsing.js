// La stringa JSON che vogliamo parsare
const jsonString = '{"nome": "Mario", "cognome": "Rossi", "eta": 30, "citta": "Milano"}';

// Parsing della stringa JSON in un oggetto JavaScript
const persona = JSON.parse(jsonString);

// Ora possiamo accedere ai valori come se fosse un oggetto normale
console.log(persona.nome);    // Output: Mario
console.log(persona.cognome); // Output: Rossi
console.log(persona.eta);     // Output: 30
console.log(persona.citta);   // Output: Milano
