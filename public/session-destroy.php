<?php

require __DIR__.'/../vendor/autoload.php';

session_start();
dump($_SESSION);

// Destruction des données de la session
session_unset();
session_destroy();

dump($_SESSION);

