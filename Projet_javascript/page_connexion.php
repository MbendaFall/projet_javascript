<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion / Inscription</title>
    <link rel="stylesheet" href="style_index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="Connexion">
        <form action="verification_info.php" method="post" class="form">
            <h1>Bienvenue dans Quizz !</h1>
            <div class="input-box">
                <input type="text" name="login" placeholder="Login" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Mot de passe" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label for=""><input type="checkbox" name="remember"> Se souvenir de moi !</label>
                <a href="#">Mot de passe oublié ?</a>
            </div>
            
            <button type="submit" class="btn">Se connecter</button>  

            <div class="Inscription">
                <a href="inscription_joueur.php">S'inscrire en tant que joueur !</a>
                
            </div>
        </form>
    </div> 
</body>
</html>
