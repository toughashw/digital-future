# Fundamentals of JS
```
 <button id="myButton">Clicca per il messaggio</button>
    <p id="message"></p>

 <script>
        // Funzione JavaScript per mostrare un messaggio
        function mostramessaggio() {
            document.getElementById("message").textContent = "Hai cliccato il bottone!";
        }

        // Aggiungi l'evento al bottone
        document.getElementById("myButton").addEventListener("click", mostramessaggio);
    </script>
```

```
function cambiaColoreSfondo() {
    const form = document.getElementById("myForm");
    form.style.backgroundColor = "lightblue"; // Cambia il colore a lightblue
}

// Aggiungi l'evento click al bottone
document.getElementById("changeColorButton").addEventListener("click", cambiaColoreSfondo);
```

```
function cambiaColoreSfondo() {
    const form = document.getElementById("myForm");
    const color = document.getElementById("colorPicker").value; // Ottieni il colore selezionato
    form.style.backgroundColor = color; // Cambia il colore di sfondo
}

document.getElementById("changeColorButton").addEventListener("click", cambiaColoreSfondo);
```