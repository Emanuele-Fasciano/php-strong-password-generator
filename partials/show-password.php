<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Show password</title>
</head>

<?php
session_start();
$password = $_SESSION["password"];
?>

<body>
    <h2 class="text-center mt-5"> La password generata è: <br>
        <strong><?= $password ?></strong>
    </h2>
    <p class="text-center mt-3">
        <a href="http://localhost/boolean%20back-end/php-strong-password-generator/?">Indietro</a>
    </p>
</body>

</html>