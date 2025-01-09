// Oggetto JavaScript
const persona = {
    nome: "Giovanni",
    eta: 25,
    citta: "Roma"
  };
  
  // Serializzazione dell'oggetto in una stringa JSON
  const jsonString = JSON.stringify(persona);
  
  console.log(jsonString);
  // Output: {"nome":"Giovanni","eta":25,"citta":"Roma"}
  