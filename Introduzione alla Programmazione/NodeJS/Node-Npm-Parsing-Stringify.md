# Funzioni Parse e Stringify


> JSON.stringify 
```
JSON.stringify(value, replacer, space)
```
valore: è l'oggetto (o valore) che vuoi convertire in una stringa JSON. In questo caso, è l'oggetto persona.
replacer: è un argomento opzionale. Può essere una funzione o un array che ti permette di filtrare o modificare i valori dell'oggetto prima che vengano serializzati in JSON.
space: è un altro parametro opzionale che definisce l'indentazione della stringa JSON risultante. Se lo imposti, la stringa JSON sarà più leggibile, con degli spazi tra le diverse proprietà.

> JSON.parse
```
JSON.parse(text, reviver)
```