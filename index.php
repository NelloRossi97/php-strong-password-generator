<?php include './partials/template/head.php' ?>
<?php include './partials/template/foot.php' ?>

<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->


<main class="container d-flex justify-content-center align-items-center vh-100">
    <div class="pass-container">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
            <div class="form-group">
                <h1>Crea la tua password sicurissima!</h1>
                <label for="howMany">Da quanti caratteri vuoi che sia composta?</label>
                <input type="number"
                    class="form-control" name="howMany" id="howMany" placeholder="Inserisci un numero">
            </div>
        </form>
    </div>
</main>