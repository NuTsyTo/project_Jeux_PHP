<?php

$title  ='HTML dans du PHP';
$p = 'Ceci est un document HTML';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body> 
    <h1><?= $title ?></h1>
    <p><?= $p ?></p>
</body>
</html>