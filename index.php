<!-- Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite 
$_SESSION recupererà la password da mostrare all'utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
 Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro 
 (es. numeri e simboli, oppure tutti e tre insieme).
Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>strong-password</title>
</head>

<?php 
include __DIR__ . './partials/functions.php';

$password_length = (int) $_GET["passwordLength"];

if($password_length){
    session_start();
    $_SESSION["password"] = createPassword($password_length);
    header("Location: ./partials/show-password.php");
 };

?>

<body>
    <div class="container">
        <h1>Generatore di password</h1>
        <form method="GET" class="my-5">
            <label for="passwordLength">Scegliere la lunghezza della password</label> <br>
            <input type="number" name="passwordLength" id="passwordLength" min="5" class="my-3">
            <button class="btn btn-primary">Genera</button>
        </form>

        <?php if(!$password_length) : ?>
        <h2>Scegliere la lunghezza della password</h2>
        <?php endif ?>
    </div>
</body>

</html>