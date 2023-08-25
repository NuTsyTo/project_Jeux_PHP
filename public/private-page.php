<?php

session_start();

// Ceci fait la même chose que le if suivant
// if(!isset($_SESSION['auth']) || $_SESSION['auth'] != true)
// L'utilisateur n'est pas authentifié

if(($_SESSION['auth'] ?? null) != true) {
    // l'utilisateur n'est pas authentifier on le renvoie à la page login

    header('Location: login.php', true, 302);
    exit();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page privée</title>
</head>
<body>
    <h1>page privée</h1>
</body>
</html>