<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validator</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container-form">
        <h1>Validateur de mot de passe</h1>

        <form action="" class="group-form">
            <div class="block-input">
                <input type="text" name="password" placeholder="Taper le mot de passe">
                <small></small>
            </div>
        </form>
        <div class="validator-criters">
            <span class="chiffre"><i class="far fa-check-circle"></i> &nbsp;Votre mot de passe doit avoir 4 chiffres</span>
            <span class="majuscule"><i class="far fa-check-circle"></i> &nbsp;Votre mot de passe doit avoir 1 lettre majuscule</span>
            <span class="minuscule"><i class="far fa-check-circle"></i> &nbsp;Votre mot de passe doit avoir 1 lettre minuscule</span>
            <span class="generique"><i class="far fa-check-circle"></i> &nbsp;Votre mot doit comporter 6 Caractères au minimum</span>
        </div>

    </div>

    <script src="js/app.js"></script>
</body>
</html>