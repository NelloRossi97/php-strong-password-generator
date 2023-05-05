<?php
include './partials/functions.php';
if (!empty($_GET['numb'])) {
    $length = $_GET['numb'];
}else{
    $length = 0;
}
$password = generatePassword($length);
?>

<?php include './partials/template/head.php' ?>

<main class="container d-flex justify-content-center align-items-center vh-100">
    <?php if ($password != 0){
        echo '  <div class="result mt-5">
                    <h3>La password generata è: '. $password .'</h3>
                </div>';
        }
    ?>
</main>

<?php include './partials/template/foot.php' ?>