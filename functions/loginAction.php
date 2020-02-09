<?php

session_start();

$_SESSION["pseudo"] = $_POST["pseudo"];

//Redirection vers chat
header("Location: ../tchat.php");

?>