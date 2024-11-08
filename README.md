---

# PHP-HOTEL

## Descrizione

Il progetto **PHP-HOTEL** consiste nella visualizzazione di un elenco di hotel, con la possibilità di filtrare i risultati in base alla disponibilità di parcheggio e al punteggio dell'hotel (numero di stelle). Si parte con una stampa semplice dei dati, per poi passare a un'implementazione più avanzata con l'uso di Bootstrap per il layout e un form per filtrare i risultati.

### Funzionalità

1. **Visualizzazione degli hotel**:
   - Utilizzando un array di hotel, vengono stampati i dati degli hotel in una pagina PHP.
   - Per ogni hotel, vengono visualizzati tutti i dati disponibili (nome, parcheggio, voto, ecc.).

2. **Aggiunta di Bootstrap**:
   - Dopo aver stampato i dati, si utilizza Bootstrap per migliorare l'aspetto della visualizzazione, mostrando le informazioni in una tabella.

3. **Filtraggio degli hotel**:
   - **Filtro per parcheggio**: Attraverso una richiesta GET, l'utente può filtrare gli hotel che dispongono di parcheggio (indicato con "Sì" o "No").
   - **Filtro per voto**: L'utente può anche filtrare gli hotel in base al loro voto (numero di stelle). Inserendo un valore (ad esempio 3), vengono mostrati solo gli hotel con un voto pari o superiore.
   
   Entrambi i filtri devono poter essere utilizzati contemporaneamente.

4. **Comportamento senza filtri**:
   - Se nessun filtro viene specificato, la lista degli hotel viene mostrata come in precedenza, senza alcuna selezione.

### Bonus

- Aggiungere un **form di filtro**:
  - Il form permetterà di selezionare due parametri di filtro: parcheggio e voto.
  - Quando l'utente invia il form, la pagina si aggiorna mostrando solo gli hotel che soddisfano i criteri di filtro.
  
- **Implementazione dei filtri**:
  - Il filtro per parcheggio mostrerà solo gli hotel che hanno il parcheggio disponibile.
  - Il filtro per voto permetterà di visualizzare solo gli hotel con un voto uguale o maggiore di quello selezionato.
  - Devono essere supportati filtri combinati (es. hotel con parcheggio e almeno 3 stelle).

### Struttura del progetto

1. **hotel.php**: Il file principale che conterrà la logica di visualizzazione degli hotel.
2. **form.php**: Contiene il form per il filtro dei dati (parcheggio e voto).
3. **bootstrap.css**: Bootstrap verrà incluso per migliorare la presentazione dei dati.

### Tecnologie utilizzate

- **PHP**: Linguaggio di scripting per la logica di filtraggio e visualizzazione.
- **HTML**: Struttura del contenuto della pagina.
- **Bootstrap**: Framework CSS per lo stile e la presentazione.

--- 
