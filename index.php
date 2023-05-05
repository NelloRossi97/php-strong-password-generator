<?php
include './partials/template/head.php';
include './partials/template/foot.php';

if (!empty($_GET['numb'])) {
    $length = $_GET['numb'];
}else{
    $length = 0;
}

include './partials/functions.php';
$password = generatePassword($length);
?>

<!-- Descrizione
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->


<main class="container d-flex justify-content-center align-items-center vh-100">
    <div class="pass-container" id="app">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
            <div class="form-group">
                <h1>Crea la tua password sicurissima!</h1>
                <label for="num">Da quanti caratteri vuoi che sia composta?</label>
                <div class="d-flex">
                    <input type="number" class="form-control" name="numb" id="numb" placeholder="Inserisci un numero">
                    <input class="btn btn-primary" type="submit" value="Invia">
                </div>
            </div>
        </form>
        <?php if ($password != 0){
            echo '<div class="result mt-5">
                    <h3>La password generata è: '. $password .'</h3>
                    </div>';
        }
       
        ?>
    </div>
</main>