<?php require ("database.php");

session_start();

//Etape 3 : prepare request
$req = $db->prepare("INSERT INTO users_messages (pseudo, message) VALUES(:pseudo, :message)");


$alert = "";

// Avant d'insérer en base de données faire les vérifications suivantes
    // Vérifier si le pseudo ou le mot de passe est vide
    if(empty($_POST["message"])){
    $alert = "Veuillez écrire un message.";
    //Redirection vers la page register.php
    header("Location: ../tchat.php?message=$alert");
    }
    else {
        $req->bindParam(":message", $_POST["message"]);
        $req->bindParam(":pseudo", $_SESSION["pseudo"]);
    }
    

    
if($req->execute()){
        header("Location: ../tchat.php?message=$alert");

}