#Basic FORM

```
<h2>Modulo di contatto</h2>

    <form action="/invia" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" required><br><br>
        
        <label for="codicefiscale">Codice Fiscale:</label>
        <input type="text" id="codicefiscale" name="codicefiscale" required><br><br>
        
        <label for="datanascita">Data di Nascita:</label>
        <input type="date" id="datanascita" name="datanascita" required><br><br>
        
        <label for="luogonascita">Luogo di Nascita:</label>
        <select>
        <option value="">Taranto</option>
        <option value="HTML">Bari</option>
        <option value="CSS">Lecce</option>
        <option value="JavaScript">Brindisi</option>
        <option value="React">Foggia</option>
        </select><br><br>
        
        <label for="telefono">Telefono:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="cv">Carica il tuo CV</label>
        <input type="file" id="cv" name="cv" required><br><br>

        <label for="messaggio">Messaggio:</label><br>
        <textarea id="messaggio" name="messaggio" rows="8" cols="70" required></textarea><br><br>

        <input type="submit" value="Invia">
    </form>
```