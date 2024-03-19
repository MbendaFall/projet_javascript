<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizz_javascript";

    $connexion = new mysqli($servername, $username, $password, $dbname);

    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }
}