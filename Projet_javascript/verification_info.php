<?php
include('connexion.php');
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Vérification des informations de connexion pour l'administrateur
    $admin_sql = "SELECT * FROM admin WHERE login_admin='$login' AND password_admin='$password'";
    $admin_result = $connexion->query($admin_sql);

    if ($admin_result->num_rows > 0) {
        // Les informations de connexion sont correctes pour l'administrateur
        $_SESSION['login_admin'] = $login;
        header("Location: Accueil.php"); // Redirection vers la page d'accueil de l'administrateur
        exit();
    }

    // Vérification des informations de connexion pour le joueur
    $player_sql = "SELECT * FROM joueur WHERE login_joueur='$login' AND password_joueur='$password'";
    $player_result = $connexion->query($player_sql);

    if ($player_result->num_rows > 0) {
        // Les informations de connexion sont correctes pour le joueur
        $_SESSION['login_joueur'] = $login;
        header("Location: Accueil.php"); // Redirection vers la page du joueur
        exit();
    } else {
        // Les informations de connexion sont incorrectes pour l'administrateur et le joueur
        echo "Login ou mot de passe incorrect.";
    }

    $connexion->close();
?>
