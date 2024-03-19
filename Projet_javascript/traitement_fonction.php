<?php
session_start();

// Vérification si la méthode de requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizz_javascript";

    // Connexion à la base de données
    $connexion = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }

    // Vérification si un joueur doit être supprimé
    if (isset($_POST['delete_player_id'])) {
        $delete_player_id = $_POST['delete_player_id'];

        // Requête SQL pour supprimer le joueur de la base de données
        $stmt = $connexion->prepare("DELETE FROM joueur WHERE id_joueur = ?");
        $stmt->bind_param("i", $delete_player_id);
        $stmt->execute();

        // Redirection vers la page actuelle pour actualiser la liste des joueurs après la suppression
        header("Location: suppression_joueur.php");
        exit(); 
    }

    // Requête SQL pour récupérer tous les joueurs de la base de données
    $result = $connexion->query("SELECT * FROM joueur");

    // Vérification si la requête s'est exécutée avec succès
    if ($result) {
        $players = array(); // Initialisation du tableau des joueurs

        // Parcourir chaque ligne de résultat et les stocker dans un tableau
        while ($row = $result->fetch_assoc()) {
            $players[] = $row;
        }
    } else {
        // Afficher un message d'erreur si la requête a échoué
        echo "Erreur lors de la récupération des joueurs : " . $connexion->error;
    }
}
?>
