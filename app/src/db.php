<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "manoprojektas");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprašome, svetainė susidūrė su problema.\n";
        echo "Klaida: " . $mysqli->connect_error . "\n";
        exit ();

    }

    mysqli_query($mysqli, "INSERT INTO klientai (vardas, email, zinute) VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[zinute]')");
