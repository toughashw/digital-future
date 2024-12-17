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