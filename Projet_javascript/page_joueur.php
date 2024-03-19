<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Quizz App</title>
    <link rel="stylesheet" href="style_player.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <header>
                <img src="image - Copie.jpg" alt="Image">
                <hr class="horizontal-divider"> <!-- Trait horizontal entre l'image et le menu -->
            </header>
            <nav>
                <ul>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Paramètre</a></li>
                    <li>
                        <a href="#">Profil</a>
                        <hr class="horizontal-divider"> <!-- Trait horizontal entre le profil et la déconnexion -->
                    </li>
                    <li class="logout">
                        <div class="logout-btn">
                            <p>Déconnexion</p>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="content">
            
            <div class="content-wrapper">
                <!-- Contenu sans rectangles -->
            </div>
            <!-- Rectangles en bas -->
            <div class="options">
                <div class="option maroon-bg">
                    <p>QUESTIONS/JEU</p>
                    <p>5</p>
                </div>
                <div class="option white-bg">
                    <p>QUESTIONS</p>
                    <p>20</p>
                </div>
                <div class="option maroon-bg">
                    <p>ADMINS</p>
                    <p>2</p>
                </div>
                <div class="option white-bg">
                    <p>JOUEURS</p>
                    <p>18</p>
                </div>
            </div>
            <!-- Nouvelle section pour les rectangles en bas -->
            <div class="bottom-options">
                <div class="bottom-option">
                    <p>EVOLUTION DU TEMPS DE JEU </p>
                </div>
                <div class="bottom-option">
                    <p>TOP SCORE</p>
                    <p>Aissatou  100 pts</p>
                    <p>Aissatou  100 pts</p>
                    <p>Aissatou  100 pts</p>
                </div>
            </div>
        </div>
        <!-- Rectangle de recherche -->
        <div class="search-box">
            <p class="search-text">Rechercher</p>
        </div>
        <!-- Texte supplémentaire "Aicha DIOP" avec une photo -->
        <div class="additional-text">
            <p>Aicha DIOP</p>
            <div class="image-container">
                <img src="aicha - Copie.jpg" alt="Aicha Diop">
            </div>
        </div>
        <!-- Barre verticale -->
        <div class="vertical-line"></div>
        <a href="Question1.html"><button class="start-btn"> jouer</button></a>
    </div>
</body>
</html>
