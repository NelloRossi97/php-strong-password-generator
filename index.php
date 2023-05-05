<?php

include './partials/functions.php';
?>

<!-- Descrizione
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata 
che tramite $_SESSION recupererà la password da mostrare all’utente. -->
<?php include './partials/template/head.php' ?>

<main class="container d-flex justify-content-center align-items-center vh-100">
    <div class="pass-container" id="app">
        <form action="result.php" method="GET">
            <div class="form-group">
                <h1>Crea la tua password sicurissima!</h1>
                <label for="num">Da quanti caratteri vuoi che sia composta?</label>
                <div class="d-flex">
                    <input type="number" class="form-control" name="numb" id="numb" placeholder="Inserisci un numero">
                    <input class="btn btn-primary" type="submit" value="Invia">
                </div>
            </div>
        </form>
    </div>
</main>

<?php include './partials/template/foot.php' ?>