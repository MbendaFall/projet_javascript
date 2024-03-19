<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_Admin</title>
    <link rel="stylesheet" href="style_admin.css">
    
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="Accueil.php">. Accueil</a></li>
                    <li><a href="Menu.php">. Menu</a></li>
                    <li><a href="#">.Profil</a></li>
                </ul>
            </nav>
            <div class="logout">
                <div class="logout-btn">
                    <a href="deconnexion.php"><button type="submit">Déconnexion</button></a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <h2>Bienvenue Admin !</h2>
                <div class="options">
                    <div class="option">
                    <a href="#"><button type="submit"  class="btn">Supprimer un joueur</button></a>
                    </div>
                    <div class="horizontal-divider"></div> <!-- Barre horizontale -->
                    <div class="option">
                      <a href="#"><button type="submit"  class="btn">Débloquer un joueur </button></a>

                    </div>
                </div>
                <div class="centered-option">
                    <div class="option maroon-bg narrow-option"> <!-- Utilisation de la classe narrow-option pour réduire la largeur -->
                        <a href="#"><button type="submit" class="btn">Bloquer un joueur</button></a>
                    </div>
                </div>
                <div class="bottom-options">
                    <div class="option">
                    <a href="#"><button type="submit"  class="btn">Ajouter une question</button></a>
                    </div>
                    <div class="horizontal-divider"></div> <!-- Barre horizontale -->
                    <div class="option">
                     <a href="#"><button type="submit"  class="btn">Supprimer une question</button></a>
                    </div>
                </div>
                <div class="bottom-options">
                    <div class="option white-bg">
                      <a href="#"><button type="submit"  class="btn">Masquer une question</button></a>
                    </div>
                    <div class="horizontal-divider"></div> <!-- Barre horizontale -->
                    <div class="option maroon-bg narrow-option">
                    <a href="enregistrer_admin.php"><button type="submit">Ajouter un autre administrateur</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
