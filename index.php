<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Password generator</title>
</head>

<?php 

include __DIR__ . './partials/functions.php';
$error_message = false;


if(isset($_POST["passwordLength"])){ 
    $password_length = (int) $_POST["passwordLength"];
    if(!empty($password_length)){
        session_start();
        $_SESSION["password"] = createPassword($password_length);
        header("Location: ./partials/show-password.php");
    } else {
        $error_message = true;
    }
 };

?>

<body>
    <div class="container">
        <h1>Generatore di password</h1>
        <form method="POST" class="mt-5">
            <label for="passwordLength">Scegliere la lunghezza della password</label> <br>
            <input type="number" name="passwordLength" id="passwordLength" min="5" class="mt-3">
            <button class="btn btn-primary">Genera</button>
        </form>
        <?php if($error_message) : ?>
        <h3 class="text-danger">Inserire un valore</h3>
        <?php endif ?>
    </div>
</body>

</html>