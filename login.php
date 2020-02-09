<?php

session_start();

//Si une session exist
if(isset($_SESSION["pseudo"])){
    //redirect to tchat.php
    header("Location: tchat.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Tchat</h1>
    <h2>La messagerie qui a du chat !</h2>

    <form action="functions/loginAction.php" method="post">
        <h3>Connexion</h3>
        <input type="text" placeholder="Pseudo" name="pseudo">
        <input type="submit" placeholder="Submit" value="Login">

        <?php
        //Afficher les echo pour erreurs succès

        if(isset($_GET["message"])){
            echo $_GET["message"];
        }
        ?>
    </form>
</body>
</html>