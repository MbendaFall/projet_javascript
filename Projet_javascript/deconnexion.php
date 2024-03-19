<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deconnexion</title>
</head>
<body>
    <?php
    session_start();
    require_once("./connexion.php");
    // Supprimer toutes les variables de session
    $_SESSION = array();
    
    // Détruire la session
    session_destroy();
    
    // Rediriger vers la page de connexion
    header("Location: ./index.php");
    exit;
  require_once("page_connexion.php");
   ?>
</body>
</html>